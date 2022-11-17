use gualanday;

create table domicilio(
				id int auto_increment,
				cedula int(15) not null,
				nombre varchar(50) not null,
				torre varchar(1) not null,
				apto varchar(3) not null,
				empresa varchar(30) not null,
				fechaHora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				primary key(id)
				);