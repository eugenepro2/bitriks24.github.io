<?php
  $post = $_POST;

  $name     =   htmlspecialchars($_POST['name'], ENT_QUOTES);
  $phone    =   htmlspecialchars($_POST['phone'], ENT_QUOTES);

  if (empty($email) && empty($phone)) {
    $error = 1;
  } else {
    $url = 'https://osotov.bitrix24.ru/crm/configs/import/leadphp';
    $name = explode(' ',$post['name']);
    $data = array(
      'LOGIN' =>'lid@lidkom.ru',
      'PASSWORD' =>'Lidkom2016#',
      'TITLE' =>'Заявка с сайта Лидком:Битрикс24',
      'NAME' => (string)@$name[1],
      'LAST_NAME' =>(string)@$phone[0],

      'UF_CRM_1423221111' =>$post['Url'],
      'UF_CRM_1448639020' =>$post['PromoCode'],
      'UF_CRM_1448637840' =>$post['TimeToCall'],
      'UF_CRM_1466370358' =>$post['host'],

      'UF_CRM_1466370559' =>$post['referer'],
      'UF_CRM_1466370697' =>$post['campaign'],
      'UF_CRM_1466370719' =>$post['term'],
      'UF_CRM_1422604463' =>$post['source'],
      'UF_CRM_1466370657' =>$post['search_query'],
      'UF_CRM_1422604393' =>$post['Goal']

    );
    $res = file_get_contents($url.'?'.http_build_query($data));



    echo $res;
  }


?>