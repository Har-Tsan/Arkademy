//query sql

SELECT nama.name, work.name, kategori.salary FROM nama
JOIN work ON nama.id_work = work.id
JOIN kategori ON nama.id_salary = kategori.id;
