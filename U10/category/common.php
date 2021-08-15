<?php
function create_slug($string)
  {
      $search = array(
          '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
          '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
          '#(ì|í|ị|ỉ|ĩ)#',
          '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
          '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
          '#(ỳ|ý|ỵ|ỷ|ỹ)#',
          '#(đ)#',
          '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
          '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
          '#(Ì|Í|Ị|Ỉ|Ĩ)#',
          '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
          '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
          '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
          '#(Đ)#',
          "/[^a-zA-Z0-9\-\_]/",
      );
      $replace = array(
          'a',
          'e',
          'i',
          'o',
          'u',
          'y',
          'd',
          'A',
          'E',
          'I',
          'O',
          'U',
          'Y',
          'D',
          '-',
      );
      $string = preg_replace($search, $replace, $string);
      $string = preg_replace('/(-)+/', '-', $string);
      $string = strtolower($string);
      return $string;
  }

function uploadFile($input_name, $target_dir, $allowtypes, $max_size, $override){
    $upload_status = true;
    $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
    $errors = array();

    $types = "";
    if(is_array($allowtypes)){
        foreach ($allowtypes as $key => $type) {
          $types .= $type.",";
        }
    }
    $types = trim($types,',');

    if (!isset($_FILES[$input_name]))
    {
        $errors[] = "Không có dữ liệu file";
        $upload_status = false;
    }

    if ($_FILES[$input_name]['error'] != 0)
    {
      $errors[] =  "Dữ liệu upload bị lỗi";
      $upload_status = false;
    }

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (!in_array($imageFileType,$allowtypes ))
    {
       $errors[] = "Chỉ được upload các định dạng ".$types;
       $upload_status = false;
    }

    if ($_FILES[$input_name]["size"] > $max_size*1024*1024)
    {
        $errors[] = "Không được upload ảnh lớn hơn $max_size (MB).";
        $upload_status = false;
    }

    if (file_exists($target_file) && $override == false)
    {
        $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
        $upload_status = false;
    }

    if ($upload_status)
    {
        if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file))
        {
            return array(true,$target_file);
        }
        else
        {
            $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
            return array(false,$errors);
        }
    }
    else
    {
        return array(false,$errors);
    }
  }
?>
