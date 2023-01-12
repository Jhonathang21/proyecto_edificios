

use gualanday;

create table visitantes(
				id int auto_increment,
				cedula int(15),
				nombre varchar(50),
				torre varchar(1),
				apto varchar(3),
				fechaHora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				primary key(id)
				
					);
