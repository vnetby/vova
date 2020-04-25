<?php

$about = get_field( 'about-company', ABOUT_POST );
$about_set = [
  'prefix_phone'    => 'tel:',
  'prefix_viber'    => 'viber://chat?number=',
  'prefix_whatsapp' => 'whatsapp://send?phone=',
  'prefix_telegram' => 'https://telegram.me/',
  'prefix_email'    => 'mailto://',
  'prefix_skype'    => 'skype:'
];



$about_operator = [
  'velcom'    => 'Velocm',
  'mts'       => 'МТС',
  'urban_fax' => 'факс',
  'life'      => 'Life',
  'urban'     => 'Городской'
];



function about_set_info () {
  global $about, $about_set;
  if (!$about ) return;
  foreach ( $about as $key => &$info ) {

    if ( $key === 'logo' ) {
      about_set_logo( $info, $about_set );
      continue;
    }


    if ( $key === 'phones' ) {
      about_set_phones( $info, $about_set );
      continue;
    }


    if ( $key === 'messenger' ) {
      about_set_messenger( $info, $about_set );
      continue;
    }


    if ( $key === 'emails' ) {
      about_set_emails( $info, $about_set );
      continue;
    }


    if ( $key === 'socials' ) {
      about_set_socials( $info, $about_set );
      continue;
    }


  }
}




function about_set_phones ( &$phones, &$about_set ) {
  foreach ( $phones as &$item ) {
    $item['phone'] = vnet_translate_str( $item['phone'] );
    $item['link'] = about_get_phone_link( $item['phone'], $about_set );
  }
}






function about_set_logo ( &$logo, &$about_set ) {
  if ( isset ( $logo['img'] ) ) {
    if ( is_array ( $logo['img'] ) ) {
      $logo = '<img src="'.vnet_translate_str( $logo['img']['url'] ).'" alt="'.vnet_translate_str ( $logo['img']['alt'] ).'" class="logo-img">';
      return;
    }
  }
  if ( isset ( $logo['text'] ) ) {
    if ( $logo['text'] ) {
      $logo = vnet_translate_str( $logo['text'] );
      return;
    }
  }
  $logo = '';
  return;
}






function about_set_messenger ( &$messengers, &$about_set ) {
  foreach ( $messengers as &$messenger ) {
    $res = [];
    if ( !$messenger['messenger'] ) continue;
    foreach ( $messenger['messenger'] as &$item ) {
      $link = vnet_translate_str ( $messenger['link'] );
      $res[$item] = about_get_messenger_link ( $item, $link, $about_set );
    }
    $messenger = $res;
  }
}






function about_set_emails ( &$emails, &$about_set ) {
  foreach ( $emails as &$email ) {
    $email['email'] = vnet_translate_str( $email['email'] );
    $email['link'] = $about_set['prefix_email'] . $email['email'];
  }
}






function about_set_socials ( &$socials, &$about_set ) {
  $res = [];

  foreach ( $socials as &$social ) {
    $res[$social['social']] = vnet_translate_str( $social['link'] );
  }
  $socials = $res;
}






function about_get_phone_link ( $phone, &$about_set ) {
  $res = preg_replace('/[^0-9]+/u', '', $phone);
  return $about_set['prefix_phone'] . '+' . $res;
}





function about_get_messenger_link ( $mess, $link, &$about_set ) {
  if ( $mess === 'viber' ) {
    $res = preg_replace('/[^0-9]+/u', '', $link);
    return $about_set['prefix_viber'] . '+' . $res;
  }

  if ( $mess === 'whatsapp' ) {
    $res = preg_replace('/[^0-9]+/u', '', $link);
    return $about_set['prefix_whatsapp'] . '+' . $res;
  }

  if ( $mess === 'telegram' ) {
    $res = preg_replace('/[^0-9]+/u', '', $link);
    return $about_set['prefix_telegram'] . '+' . $res;
  }

  if ( $mess === 'skype' ) {
    $res = preg_replace('/[^0-9]+/u', '', $link);
    return $about_set['prefix_skype'] . '+' . $res . '?call';
  }

}



about_set_info();
