<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class BlogController extends Controller
{
  /**
* @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
*/

    public function list($page=1)
    {

      // store an attribute for reuse during a later user request
    $session->set('foo', 'bar');

    // get the attribute set by another controller in another request
    $foobar = $session->get('foobar');

    // use a default value if the attribute doesn't exist
    $filters = $session->get('filters', array());
    
      return $this->file('../static/hola.txt');

      return $this->json(array('username' => 'jane.doe'));

      throw $this->createNotFoundException('El producto no existe');

      return $this->redirectToRoute('lucky_number');
      $page;
      $content = "<strong>PAGINA $page</strong><ul>";
      for($i = 1; $i <= 10; $i++){
        $content .= "<li>Entrada $i </li>";
      }
      $content .= "</ul>";
        return new Response(
            "<html><body>$content</body></html>"
        );
    }

    /**
    * @Route("/blog/{entryName}/{entryId}", name="blog_show_by_id")
    */

    public function show($entryName)
    {
      // $entryName will equal the dynamic part of the URL
// e.g. at /blog/yay-routing, then $entryName='yay-routing'
        $url = $this->generateUrl(
          'lucky_number',
          array('entryName' => $entryName)


        );
        return new Response(
            '<html><body>Entrada ' . $entryName .  ' url: '. $url .'</body></html>'
        );
    }
    public function showById($entryId)
    {
      $url = $this->generateUrl('blog_list', array(
         'page' => 2,
         'category' => 'Symfony',
       ), UrlGeneratorInterface::ABSOLUTE_URL);
    //http://127.0.0.1:8000/blog/2?category=Symfony
        return new Response(
            '<html><body>Entrada ' . $entryId . ' url: '. $url .'</body></html>'
        );
    }


}
?>
