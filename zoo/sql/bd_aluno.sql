/*Drop database if exists bd_aluno;
create database bd_aluno;*/
use bd_aluno;
create table if not exists animal
(
  nome varchar(100) not null,
  idade int (3) not null,
  especie varchar(100) not null,
  nomec varchar(100) not null
  );
  insert into animal(cobra,'2',terrestre,cobra);

select * 
from animal;
