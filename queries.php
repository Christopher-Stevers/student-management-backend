<?php
$SCHO = "CREATE TABLE scho(
    scho_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    title TEXT NOT NULL,
    street_address TEXT NOT NULL,
    city_address TEXT NOT NULL  
    )";
    
  
  $SUBJ = "CREATE TABLE subj(
      subj_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
      title TEXT NOT NULL
            )";

  $TEAC = "CREATE TABLE teac(
      teac_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
      first_name TEXT NOT NULL,
      last_name TEXT NOT NULL,
      street_address TEXT NOT NULL,
      city_address TEXT NOT NULL,
      email TEXT NOT NULL,
      phone TEXT NOT NULL,
      class_id INT NOT NULL
      )";
  $STUD = "CREATE TABLE stud(
      stud_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
      first_name TEXT NOT NULL,
      last_name TEXT NOT NULL,
      street_address TEXT NOT NULL,
      city_address TEXT NOT NULL,
      email TEXT NOT NULL,
      phone TEXT NOT NULL,
      dob DATE NOT NULL,
      grade INT NOT NULL
    )";
  $CLAS = "CREATE TABLE clas(
    clas_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    subj_id INT NOT NULL,
    scho_id INT NOT NULL,
    time_start DATE NOT NULL,
    time_end DATE NOT NULL,
    teac_id INT NOT NULL,
    CONSTRAINT fk_scho_id
    FOREIGN KEY (scho_id) REFERENCES scho(scho_id),
         
    CONSTRAINT fk_subj_id
    FOREIGN KEY (subj_id) REFERENCES subj(subj_id),
    
    CONSTRAINT fk_teac_id
    FOREIGN KEY (teac_id) REFERENCES teac(teac_id)  
    )";
    $STUDCLAS="CREATE TABLE studclas(
      clas_id INT NOT NULL,
      stud_id INT NOT NULL,
    CONSTRAINT fk_clas_id
    FOREIGN KEY (clas_id) REFERENCES clas(clas_id), 
    CONSTRAINT fk_stud_id    
    FOREIGN KEY (stud_id) REFERENCES stud(stud_id)   

      

    )";
  $GRAD= "CREATE TABLE grad(
    
    grad_id INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    perc_val INT NOT NULL,
    weight_val INT NOT NULL,
    clas_id INT NOT NULL,
    stud_id INT NOT NULL,
    CONSTRAINT fk_clas_id
    FOREIGN KEY (clas_id) REFERENCES clas(clas_id),
    CONSTRAINT fk_stud_id   
    FOREIGN KEY (stud_id) REFERENCES stud(stud_id)

  )";
  ?>