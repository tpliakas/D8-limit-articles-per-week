<?phpnamespace Drupal\limit_articles_per_week\Controller;use Drupal\Core\Controller\ControllerBase;use Symfony\Component\HttpFoundation\RedirectResponse;class RedirectsController extends ControllerBase{    public function redirect_member()    {        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());        $member_id = $user->get('field_mycustomfield_member_belongs')->target_id;        $url = '/node/' . $member_id . '/edit';        return new RedirectResponse($url);    }    public function mypage()    {    }}