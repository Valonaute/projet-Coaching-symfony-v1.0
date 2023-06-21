<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use ErrorException;
use Symfony\Component\Filesystem\Filesystem;

class ArticleController extends AbstractController
{
    public $entityManager;
    public $ArticleRepository;

    public function __construct(EntityManagerInterface $entityManager, ArticleRepository $ArticleRepository)
    {
        $this->entityManager = $entityManager;
        $this->ArticleRepository = $ArticleRepository;
    }

    public function createArticle(Request $request)
    {
        $Article = new Article();
        $form = $this->createForm(ArticleType::class, $Article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $image = $form->get('image')->getData();

           if($image) {
            // $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            // $finalImage = $originalFilename . '.' .$image->guessExtension();
            $finalImage = time() . '.' . $image->guessExtension();

             try {
                $image->move(
                    $this->getParameter('image_directory')
                    , $finalImage
                );
                
                } catch (FileException $e) {
                    throw new ErrorException("un problème est survenue lors de l'envoi de l'image");
                }

                $Article->setImage($finalImage);
                $this->ArticleRepository->save($Article, $flush =  true);

                $this->addflash('success', 'Cet article a bien été mis en ligne !');
                return $this->redirectToRoute('show_article');

             }
           
        }

        return $this->render('article/create.html.twig', [
        'form' => $form->createView()
        ]);
    }

    public function showArticles(ArticleRepository $ArticleRepository)
    {
        return $this->render('article/show.html.twig', [
            'articles' => $ArticleRepository->findAll()
        ]);
    }

    public function updateArticle(Request $request, $id)
    {
        $Article = $this->ArticleRepository->find($id);

        /* if(!$Article)
        {
            return $this->redirectToRoute('show_Article');
        } */

        $form = $this->createForm(ArticleType::class, $Article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $image = $form->get('image')->getData();

            if($image) {
                /* $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME); */
                $finalImage = time() . '.' .$image->guessExtension();
    
                 try {
                    $image->move(
                        $this->getparameter('image_directory')
                        , $finalImage
                    );
    
                    if($Article->getImage() != $finalImage)
                    {
                        $projectDir = $this->getParameter('kernel.project_dir');
                        $filesystem = new Filesystem();
                        $filesystem->remove($projectDir.'/public/uploads/'.$Article->getImage());
                        $Article->setImage($finalImage);
                    }
                    
                    } catch (FileException $e) {
                        throw new ErrorException("un problème est survenue lors de l'upload de l'image");
                    }
    
                    $Article->setImage($finalImage);
                    $this->ArticleRepository->save($Article, $flush =  true);
    
                    $this->addflash('success', 'Le produit a bien été uploadé');
                    return $this->redirectToRoute('show_article');
    
                 }
    
                    $this->ArticleRepository->save($Article, $flush = true);
                    $this->addFlash('success', 'Le produit a bien été modifié');
                    return $this->redirectToRoute('show_article');
        }

        return $this->render('article/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function deleteArticle($id)
    {
        $Article = $this->ArticleRepository->find($id);

        if($Article)
        {
                $this->ArticleRepository->remove($Article, $flush = true);

                $projetDir = $this->getParameter('kernel.project_dir');

                $filesystem = new Filesystem();

                $filesystem->remove($projetDir.'/public/uploads/'.$Article->getImage());

                $this->addFlash('success','Le produit a bien été supprimé');

                return $this->redirectToRoute('show_article');
        }
    }
    


}

