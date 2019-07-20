<?php
  function myBio()
  {
    $data = new \stdClass();
    $data->name = "Hartantya A. Tsaniyah";
    $data->age = 23;
    $data->address = "Jagir Sidomukti 3/21 Surabaya";
    $data->hobbies = array("orginizing","sport","puzzles","browsing");
    $data->is_married = False;
    //list_school
    $data->list_school['University'] =  (object) array('name' => 'Institut Teknologi Sepuluh Nopember', 'year_in' => '2014', 'year_out' => '2018', 'major' => 'Information Systems');
    $data->list_school['High School'] =  (object) array('name' => 'SMA N 15 Surabaya', 'year_in' => '2011', 'year_out' => '2014', 'major' => 'Science');
    $data->list_school['Junior High School'] =  (object) array('name' => 'SMP N 12 Surabaya', 'year_in' => '2008', 'year_out' => '2011', 'major' => Null);
    $data->list_school['Primary School'] =  (object) array('name' => 'SD Muhammadiyah 6 Surabaya', 'year_in' => '2002', 'year_out' => '2008', 'major' => Null);
    //skills
    $data->skills[1] = (object) array('skill_name' => 'PHP', 'level' => 'advanced');
    $data->skills[2] = (object) array('skill_name' => 'Python for Data Analytic', 'level' => 'beginner');
    $data->skills[3] = (object) array('skill_name' => 'R Programming', 'level' => 'beginner');
    $data->skills[4] = (object) array('skill_name' => 'HTML, CSS, Javascript', 'level' => 'beginner');
    $data->skills[5] = (object) array('skill_name' => 'SQL', 'level' => 'advanced');

    $data->interest_in_coding = True;

    return json_encode($data);
  }

  $myData = myBio();
  echo $myData;
?>
