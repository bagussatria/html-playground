<?php
class social_existence {


   public static $timeout = 2;


   public static $statuses = array(
      'success' => array(200),
      'failure' => array(404, 410)
   );


   public static $agents = array(
      'chrome'    => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36',
      'googlebot' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'
   );


   public static $websites = array(
      array('domain' => 'instagram.com',     'url' => 'https://www.{domain}/{username}/',        'agent' => 'chrome'),
      array('domain' => 'disqus.com',        'url' => 'https://{domain}/by/{username}/',         'agent' => 'chrome'),
      array('domain' => 'pinterest.com',     'url' => 'https://www.{domain}/{username}/',        'agent' => 'chrome'),
      array('domain' => 'codepen.io',        'url' => 'https://{domain}/{username}/',            'agent' => 'chrome'),
      array('domain' => 'jsfiddle.net',      'url' => 'https://{domain}/user/{username}/',       'agent' => 'chrome'),
      array('domain' => 'twitter.com',       'url' => 'https://mobile.{domain}/{username}',      'agent' => 'googlebot'),
      array('domain' => 'patreon.com',       'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'youtube.com',       'url' => 'https://www.{domain}/user/{username}',    'agent' => 'chrome'),
      array('domain' => 'imgur.com',         'url' => 'https://{username}.{domain}/',            'agent' => 'chrome'),
      array('domain' => 'pastebin.com',      'url' => 'https://{domain}/u/{username}',           'agent' => 'chrome'),
      array('domain' => 'reddit.com',        'url' => 'https://www.{domain}/user/{username}',    'agent' => 'chrome'),
      array('domain' => 'twitch.tv',         'url' => 'https://m.{domain}/{username}/profile',   'agent' => 'chrome'),
      array('domain' => 'fiverr.com',        'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'ask.fm',            'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'medium.com',        'url' => 'https://{domain}/@{username}',            'agent' => 'chrome'),
      array('domain' => 'github.com',        'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'flickr.com',        'url' => 'https://www.{domain}/photos/{username}',  'agent' => 'chrome'),
      array('domain' => 'issuu.com',         'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'fancy.com',         'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'themeforest.net',   'url' => 'https://{domain}/user/{username}',        'agent' => 'chrome'),
      array('domain' => 'myspace.com',       'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'dribbble.com',      'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'kickstarter.com',   'url' => 'https://www.{domain}/profile/{username}', 'agent' => 'chrome'),
      array('domain' => 'about.me',          'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'deviantart.com',    'url' => 'https://{username}.{domain}/',            'agent' => 'chrome'),
      array('domain' => 'gravatar.com',      'url' => 'https://en.{domain}/{username}',          'agent' => 'chrome'),
      array('domain' => 'reverbnation.com',  'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'stream.me',         'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'bandcamp.com',      'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'foursquare.com',    'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'behance.net',       'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'vid.me',            'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'ello.co',           'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'buzzfeed.com',      'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'followus.com',      'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'teamtreehouse.com', 'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'venmo.com',         'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'coderwall.com',     'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'wishlistr.com',     'url' => 'https://www.{domain}/{username}',         'agent' => 'chrome'),
      array('domain' => 'angel.co',          'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'soundcloud.com',    'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'weheartit.com',     'url' => 'https://{domain}/{username}',             'agent' => 'chrome'),
      array('domain' => 'newgrounds.com',    'url' => 'https://{username}.{domain}/',            'agent' => 'chrome'),
      array('domain' => 'crunchyroll.com',   'url' => 'http://www.{domain}/user/{username}/',    'agent' => 'chrome'),
      array('domain' => 'thoughts.com',      'url' => 'http://{domain}/profile/{username}',      'agent' => 'chrome'),
      array('domain' => 'weebly.com',        'url' => 'http://{username}.{domain}/',             'agent' => 'chrome'),
      array('domain' => 'hatena.com',        'url' => 'http://profile.{domain}/{username}/',     'agent' => 'chrome'),
      array('domain' => 'tumblr.com',        'url' => 'http://{username}.{domain}/',             'agent' => 'chrome'),
      array('domain' => 'posteet.com',       'url' => 'http://www.{domain}/posteets/{username}', 'agent' => 'chrome'),
      array('domain' => 'wookmark.com',      'url' => 'http://www.{domain}/profile/{username}',  'agent' => 'chrome'),
      array('domain' => 'colourlovers.com',  'url' => 'http://www.{domain}/lover/{username}',    'agent' => 'chrome'),
      array('domain' => 'fotolog.com',       'url' => 'http://www.{domain}/{username}',          'agent' => 'chrome')
   );


   public static function website_protocol() {
      return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' && $_SERVER['HTTPS'] ? 'https' : 'http');
   }


   public static function website_url() {
      return self::website_protocol() . '://' . $_SERVER['HTTP_HOST'] . preg_replace('/\/$/', '', dirname($_SERVER['PHP_SELF'])) . '/';
   }


   public static function current_url() {
      return self::website_protocol() . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   }


   public static function http_request($url, $agent) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,            $url);
      curl_setopt($ch, CURLOPT_USERAGENT,      $agent);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$timeout);
      curl_setopt($ch, CURLOPT_TIMEOUT,        self::$timeout);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
      $response['data']     = curl_exec($ch);
      $response['redirect'] = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
      $response['status']   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
      return $response;
   }


   public static function prepare_url($index, $username) {
      $website = self::$websites[$index];
      $find    = array('{domain}', '{username}');
      $replace = array($website['domain'], $username);
      return str_replace($find, $replace, $website['url']);
   }


   public static function http_status($index, $username, $redirect = false, $redirects = 0) {
      $website = self::$websites[$index];
      $url     = self::prepare_url($index, $username);
      $agent   = self::$agents[$website['agent']];
      $request = self::http_request($redirect ?: $url, $agent);
      if ( $redirects < 1 && preg_match('/' . preg_quote($username, '/') . '/i', $request['redirect']) ) {
         return self::http_status($index, $username, $request['redirect'], ++$redirects);
      }
      else {
         return $request['status'];
      }
   }


   public static function get_existence($index, $username) {
      $result['domain'] = self::$websites[$index]['domain'];
      $result['url']    = self::prepare_url($index, $username);
      $result['status'] = self::http_status($index, $username);
      if ( in_array($result['status'], self::$statuses['success']) ) {
         $result['message'] = 'exists';
      }
      else if ( in_array($result['status'], self::$statuses['failure']) ) {
         $result['message'] = 'doesn\'t exist';
      }
      else {
         $result['message'] = 'unknown';
      }
      return $result;
   }


}
?>