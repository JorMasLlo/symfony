<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
  /**
* @Route("/blog", name="blog_list")
*/

    public function list()
    {
      $content = "<ul>";
      for($i = 1; $i <= 10; $i++){
        $content .= "<li>Entrada $i </li>";
      }
      $content .= "</ul>";
        return new Response(
            "<html><body>$content</body></html>"
        );
    }

    /**
    * @Route("/blog/{entryName}", name="blog_show")
    */

    public function show($entryName)
    {
      // $entryName will equal the dynamic part of the URL
// e.g. at /blog/yay-routing, then $entryName='yay-routing'

        return new Response(
            '<html><body>Entrada ' . $entryName . '</body></html>'
        );
    }
}
?>
