create table productCategory(
	idCategory int not null primary key auto_increment,
	nameCategory varchar(40) not null
);
create table products(
	idProducts int not null primary key auto_increment,
    name_product varchar(40) not null,
    description_procuct varchar(120) ,
    idCategory int not null,
    quantity int not null,
    foreign key(idCategory) references productCategory(idCategory)
);

select * from products;
select * from productCategory;

insert into productCategory(nameCategory) values("carnes");
insert into productCategory(nameCategory) values("bebidas");
insert into productCategory(nameCategory) values("dulces");
insert into productCategory(nameCategory) values("verdura");
insert into productCategory(nameCategory) values("fruta");
insert into productCategory(nameCategory) values("tuberculo");

insert into products(name_product,description_procuct,idCategory,quantity) values("papa","es un tuberculo muy feo y de carton",6,500);
insert into products(name_product,description_procuct,idCategory,quantity) values("mandarina","es una fruta muy rica",5,550);
insert into products(name_product,description_procuct,idCategory,quantity) values("morochitas","galletita bañada en chocolate",3,50);