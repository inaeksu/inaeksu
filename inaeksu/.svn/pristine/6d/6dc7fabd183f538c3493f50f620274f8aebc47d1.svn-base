-- institute
INSERT INTO `institute` (`id`, `name`, `city_phone`, `internal_phone`, `methodist_phone`, `director_id`, `methodist_subdirector_id`, `science_subdirector_id`, `education_subdirector_id`, `director_auditory`) 
	VALUES (1, 'inaeksu', '0977886648', '12112', '0977886648', 1, 2, 3, 4, '5225');

select * from `institute`;

update `institute` set 
	`name` = 'inaeksu', 
	`city_phone` = '0977886648', 
	`internal_phone` = '8888', 
	`methodist_phone` = '0977886648', 
	`director_id` = 1, 
	`methodist_subdirector_id` = 2, 
	`science_subdirector_id` = 3, 
	`education_subdirector_id` = 4, 
	`director_auditory` = '666'
  	where id = 1;
  	
delete from `institute` where id = 1;


-- khafedra
INSERT INTO `khafedra` (`id`, `name`, `internal_phone`, `methodist_phone`, `technician_phone`, `head_of_khafedra_id`, `head_of_khafedra_auditory`, `institute_id`) 
	VALUES (1, 'inaeksu', '0977886648', '12112', '0977886648', 1, '5225', 1);

select * from `khafedra`;

update `khafedra` set 
	`name` = 'inaeksu', 
	`internal_phone` = '0977886648', 
	`methodist_phone` = '8888', 
	`technician_phone` = '0977886648', 
	`head_of_khafedra_id` = 1, 
	`head_of_khafedra_auditory` = '3443', 
	`institute_id` = 1
  	where id = 1;
  	
delete from `khafedra` where id = 1;


-- teacher
INSERT INTO `teacher` (`id`, `first_name`, `last_name`, `middle_name`, `scientific_degree_id`, `academic_degree_id`, `position_id`, `khafedra_id`, `start_working_date`, `internal_phone`, `auditory`, `user_id`) 
	VALUES (1, 'first_name', 'last_name', 'middle_name', 1, 1, 1, 1, 123456789, '0966885598', '5225', 1);

select * from `teacher`;

select teacher.id, `first_name`, `last_name`, `middle_name`, scientific_degree.name as scientific_degree, academic_degree.name as academic_degree, position.name as position, khafedra.name as khafedra, `start_working_date`, teacher.internal_phone, `auditory`, core_user.username 
  from `teacher` left join scientific_degree on teacher.scientific_degree_id = scientific_degree.id
  left join academic_degree on teacher.academic_degree_id = academic_degree.id
  left join position on teacher.position_id = position.id
  left join khafedra on teacher.khafedra_id = khafedra.id
  left join core_user on teacher.user_id = core_user.id;

update `teacher` set 
	`first_name` = 'first_name', 
	`last_name` = 'last_name', 
	`middle_name` = 'middle_name', 
	`scientific_degree_id` = 1, 
	`academic_degree_id` = 1, 
	`position_id` = 1, 
	`khafedra_id` = 1,
    `start_working_date` = 123456789, 
	`internal_phone` = '0966885598', 
	`auditory` = '3443', 
	`user_id` = 1
  	where id = 1;
  	
delete from `teacher` where id = 1;


-- scientific_degree
INSERT INTO `scientific_degree` (`id`, `name`) 
	VALUES (1, 'name');

select * from `scientific_degree`;

update `scientific_degree` set 
	`name` = 'first_name'
  	where id = 1;
  	
delete from `scientific_degree` where id = 1;


-- academic_degree
INSERT INTO `academic_degree` (`id`, `name`) 
	VALUES (1, 'name');

select * from `academic_degree`;

update `academic_degree` set 
	`name` = 'first_name'
  	where id = 1;
  	
delete from `academic_degree` where id = 1;


-- position
INSERT INTO `position` (`id`, `name`) 
	VALUES (1, 'name');

select * from `position`;

update `position` set 
	`name` = 'first_name'
  	where id = 1;
  	
delete from `position` where id = 1;


-- publication
INSERT INTO `publication` (`id`, `name`, `year`, `pages_count`, `isbn`, `additional_info`, `verification`, `kind_of_publication_id`, `edition_id`) 
	VALUES (1, 'publication', 142356789, 20, 'isbn', 'additional_info', false, 1, 1);

select * from `publication`;

update `publication` set 
	`name` = 'name', 
	`year` = 123456789, 
	`pages_count` = 50, 
	`isbn` = 'isbn', 
	`additional_info` = 'additional_info', 
	`verification` = true, 
	`kind_of_publication_id` = 1, 
	`edition_id` = 1
  	where id = 1;
  	
delete from `publication` where id = 1;


-- kind_of_publication
INSERT INTO `kind_of_publication` (`id`, `name`) 
	VALUES (1, 'name');

select * from `kind_of_publication`;

update `kind_of_publication` set 
	`name` = 'first_name'
  	where id = 1;
  	
delete from `kind_of_publication` where id = 1;


-- edition
INSERT INTO `edition` (`id`, `name`) 
	VALUES (1, 'name');

select * from `edition`;

update `edition` set 
	`name` = 'first_name'
  	where id = 1;
  	
delete from `edition` where id = 1;


-- teacher_publication
INSERT INTO `teacher_publication` (`id`, `teacher_id`, `publication_id`, `z_p_numb`) 
	VALUES (1, 1, 1, 'name');

select * from `teacher_publication`;

update `teacher_publication` set 
	`teacher_id` = 1, 
	`publication_id` = 1, 
	`z_p_numb` = 'z_p_numb'
  	where id = 1;
  	
delete from `teacher_publication` where id = 1;


--select publication for institute
select publication.id, publication.name, publication.year, publication.pages_count, publication.isbn, publication.additional_info, publication.verification, kind_of_publication.name, edition.name 
	from publication inner join kind_of_publication on publication.kind_of_publication_id = kind_of_publication.id
	inner join edition on publication.edition_id = edition.id
	right join teacher_publication on teacher_publication.publication_id = publication.id
	right join teacher on teacher_publication.teacher_id = teacher.id
	right join khafedra on teacher.khafedra_id = khafedra.id
	right join institute on khafedra.institute_id = institute.id
	where institute.id = 1;
	
--menu
INSERT INTO menu (id, name) 
	VALUES (1, 'name');
	
select * from menu;

update menu set 
	name = 'new name'
	where id = 1;
	
delete from menu where id = 1;

select core_page.id, surl, title_ua, title_ru, title_en, menu.id, menu.name from core_page INNER JOIN menu ON menu_id = menu.id where menu.id = 1;


