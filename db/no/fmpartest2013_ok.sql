-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dbfmpartest2013
--

CREATE DATABASE IF NOT EXISTS dbfmpartest2013;
USE dbfmpartest2013;

--
-- Temporary table structure for view `resultadosa`
--
DROP TABLE IF EXISTS `resultadosa`;
DROP VIEW IF EXISTS `resultadosa`;
CREATE TABLE `resultadosa` (
  `idaspirante` varchar(5),
  `apellido` varchar(45),
  `nombre` varchar(45),
  `fecha` varchar(25),
  `edad` int(10) unsigned,
  `sexo` varchar(2),
  `praven` int(10) unsigned,
  `draven` varchar(4),
  `pcep_c` int(10) unsigned,
  `pcep_e` int(10) unsigned,
  `pcep_p` int(10) unsigned,
  `pcep_s` int(10) unsigned,
  `pcep_x` int(10) unsigned,
  `dcep` varchar(2),
  `dfinal` varchar(2),
  `prueba_num` int(10) unsigned,
  `profesorado` varchar(10)
);

--
-- Temporary table structure for view `resultadosb`
--
DROP TABLE IF EXISTS `resultadosb`;
DROP VIEW IF EXISTS `resultadosb`;
CREATE TABLE `resultadosb` (
  `idaspirante` varchar(5),
  `apellido` varchar(45),
  `nombre` varchar(45),
  `fecha` varchar(25),
  `edad` int(10) unsigned,
  `sexo` varchar(2),
  `ciotis` int(10) unsigned,
  `dotis` varchar(4),
  `cepq_n` int(10) unsigned,
  `cepq_e` int(10) unsigned,
  `cepq_p` int(10) unsigned,
  `cepq_s` int(10) unsigned,
  `depq` varchar(4),
  `dfinal` varchar(4),
  `prueba_num` int(10) unsigned,
  `profesorado` varchar(10)
);

--
-- Temporary table structure for view `todos`
--
DROP TABLE IF EXISTS `todos`;
DROP VIEW IF EXISTS `todos`;
CREATE TABLE `todos` (
  `idaspirante` varchar(8),
  `apellido` varchar(45),
  `nombre` varchar(45),
  `fecha` varchar(25),
  `edad` int(10) unsigned,
  `sexo` varchar(2),
  `dfinal` varchar(2),
  `prue` varchar(2),
  `num_prue` int(10) unsigned,
  `profesorado` varchar(10)
);

--
-- Definition of table `tb_admon`
--

DROP TABLE IF EXISTS `tb_admon`;
CREATE TABLE `tb_admon` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(90) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `usu` varchar(45) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admon`
--

/*!40000 ALTER TABLE `tb_admon` DISABLE KEYS */;
INSERT INTO `tb_admon` (`id`,`nombre`,`sexo`,`tel`,`cargo`,`usu`,`pass`) VALUES 
 (1,'Lic. Jorge Alberto Mena','1','12345678','Psicologo','admin','47752343b82400f620ef2491fce4dc76');
/*!40000 ALTER TABLE `tb_admon` ENABLE KEYS */;


--
-- Definition of table `tb_aspirantes`
--

DROP TABLE IF EXISTS `tb_aspirantes`;
CREATE TABLE `tb_aspirantes` (
  `idaspirante` varchar(5) NOT NULL,
  `nit` varchar(25) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `profesorado` varchar(10) NOT NULL,
  `fecha` varchar(25) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `edad` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`idaspirante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_aspirantes`
--

/*!40000 ALTER TABLE `tb_aspirantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_aspirantes` ENABLE KEYS */;


--
-- Definition of table `tb_auxresultados`
--

DROP TABLE IF EXISTS `tb_auxresultados`;
CREATE TABLE `tb_auxresultados` (
  `idaspirante` varchar(8) NOT NULL,
  `dfinal` varchar(2) NOT NULL,
  `prue` varchar(2) NOT NULL,
  `num_prue` int(10) unsigned NOT NULL,
  KEY `FK_tb_auxresultados_1` (`idaspirante`),
  CONSTRAINT `FK_tb_auxresultados_1` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_auxresultados`
--

/*!40000 ALTER TABLE `tb_auxresultados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_auxresultados` ENABLE KEYS */;


--
-- Definition of table `tb_cep`
--

DROP TABLE IF EXISTS `tb_cep`;
CREATE TABLE `tb_cep` (
  `idcep` int(10) unsigned NOT NULL auto_increment,
  `preguntas` varchar(225) NOT NULL,
  PRIMARY KEY  (`idcep`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8 COMMENT='preguntas de la letra C';

--
-- Dumping data for table `tb_cep`
--

/*!40000 ALTER TABLE `tb_cep` DISABLE KEYS */;
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (1,'??Tiende a reducir sus amistades a un grupo escogido?'),
 (2,'??Se encuentra a gusto entre mucha gente?'),
 (3,'??Le gusta m??s actuar que pensar lo que hay que hacer?'),
 (4,'??Cu??ndo la gente se mete con usted suele tener respuesta inmediata?'),
 (5,'??Fantasea a menudo con proyectos que no se realizan nunca?'),
 (6,'De peque??o ??era usted obediente?'),
 (7,'??Es usted r??pido y seguro en sus actos?'),
 (8,'??Responde usted con dureza cuando alguien le ataca?'),
 (9,'??Le molesta tener que hacer nuevas amistades?'),
 (10,'??Deja a veces para ma??ana lo que podr??a hacer hoy?'),
 (11,'??Toma su trabajo con naturalidad, esto es, sin preocuparse m??s de lo necesario?'),
 (12,'??Se disgusta con facilidad?'),
 (13,'??Le gusta recordar momentos felices de su vida pasada?'),
 (14,'Cuando promete algo, ??lo cumple siempre, aunque sea muy desfavorable para usted?'),
 (15,'??Es un poco t??mido con las personas de otro sexo?'),
 (16,'??Se deja de contemplaciones cuando sospecha que alguien le quiere hacer una mala jugada?'),
 (17,'??Se enfurece alguna vez?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (18,'??Hay ocasiones en que se siente muy solo?'),
 (19,'??Cree que las dificultades s??lo detienen a los d??biles?'),
 (20,'??Le molesta mucho llegar tarde a una cita?'),
 (21,'??Suele ocurr??rsele las respuestas cuando ya ha pasado la ocasi??n?'),
 (22,'??Ha fanfarroneado alguna vez?'),
 (23,'??Le irrita mucho que alguien no conteste a sus cartas?'),
 (24,'??Tiende a ser escrupuloso en el cumplimiento de sus obligaciones?'),
 (25,'??Lo suele pasar muy bien en fiestas y reuniones sociales?'),
 (26,'Al decir algo ??suele tener en cuenta lo que van a pensar los dem??s?'),
 (27,'??Es propenso a cambiar de humor sin causa justificada?'),
 (28,'??Le gusta gastar bromas a la gente?'),
 (29,'??Le han cogido alguna vez en una mentira?'),
 (30,'??Se le va a veces la imaginaci??n cuando trata de concentrarse en algo?'),
 (31,'??Se considera a s?? mismo como un individuo nervioso?'),
 (32,'??Se le ocurre con frecuencia lo que deber??a haber hecho cuando ya ha pasado el momento?'),
 (33,'??Le molesta mucho perder en el juego?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (34,'??Cree usted que desgraciadamente es verdad lo que indica el dicho \"piensa mal y acertar??s?'),
 (35,'??Le resulta f??cil, por lo general, hacer nuevas amistades?'),
 (36,'??Ha tenido alguna vez la extra??a sensaci??n de ser distinto de c??mo era antes?'),
 (37,'Cuando est?? trabajando ??le molesta mucho que le interrumpan?'),
 (38,'??Cree que abundan las personas envidiosas?'),
 (39,'??Toma muy \"apecho \" su trabajo?'),
 (40,'??Se distrae a menudo en el curso de una conversaci??n?'),
 (41,'??Le critican m??s de lo que se merece?'),
 (42,'??Se alegra de verdad si un enemigo suyo consigue un ??xito merecido?'),
 (43,'??Le divierten las reuniones y fiestas m??s que ninguna otra cosa?'),
 (44,'??Tiene a veces preocupaciones que no lo dejan dormir?'),
 (45,'Modestia aparte, ??Se juzga usted superior a la gente?'),
 (46,'??Murmura usted de vez en cuando?'),
 (47,'??Suele pasarlo bien en las fiestas y reuniones sociales?'),
 (48,'??Se considera usted una persona algo so??adora?'),
 (49,'??Se siente a veces deprimido y cansado, sin ninguna raz??n determinada?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (50,'??Tiene usted a veces pensamientos o deseos que le avergonzar??an si se supieran?'),
 (51,'??Tiene usted a quedarse callado cuando se encuentra entre personas que conoce poco?'),
 (52,'??Se encuentra a veces rebosante de energ??a y a veces francamente agotado?'),
 (53,'??Se interpreta mal muchas de las cosas que usted dice o hace?'),
 (54,'??Le gusta averiguar los motivos ocultos de la conducta ajena?'),
 (55,'??Suele tener raz??n en las discusiones?'),
 (56,'??Responde en seguida a todas las cartas que recibe?'),
 (57,'??Se considera a s?? mismo como una persona habladora?'),
 (58,'??Prefiere los trabajos de acci??n a los de pensamiento?'),
 (59,'??Se conduce con igual correcci??n en su casa que cuando est?? de visita?'),
 (60,'??Le gusta hacer nuevas amistades?'),
 (61,'??Le deprime o le aburre estar solo?'),
 (62,'??Le gusta meterse en asunto que requieren energ??a y rapidez de acci??n?'),
 (63,'??Piensa con frecuencia en los buenos tiempos pasados?'),
 (64,'??Habla a veces de lo que no sabe?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (65,'??Cree que es imposible confiar de verdad en nadie?'),
 (66,'??Le ocurre a menudo que una idea tonta le venga insistentemente a la imaginaci??n?'),
 (67,'??Le considera la gente como una persona animada?'),
 (68,'??Sabe aguantar bien a las personas que abusan de su autoridad?'),
 (69,'??Sabe aguantar bien a las personas que abusan de su autoridad ?'),
 (70,'??Suele tener un humor casi siempre igual?'),
 (71,'??Le duele mucho que le traten secamente?'),
 (72,'??Se conforma cuando no se sale con la suya?'),
 (73,'??Se siente muy herido en sus sentimientos cuando la gente es desconsiderada con  usted?'),
 (74,'??Presume a veces m??s de lo debido?'),
 (75,'??Le gusta dirigir grupos, reuniones, etc.?'),
 (76,'??Se considera a si mismo una persona alegre y optimista?'),
 (77,'??Ha tenido alguna vez apuros econ??micos?'),
 (78,'??Le ha convencido la vida de que para hacerse respetar hay que ser duro?'),
 (79,'Si alguien se mete con usted, ??no para hasta darle su merecido?'),
 (80,'??Se pone a veces tan nervioso que no puede permanecer sentado?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (81,'En general ??Le gustan las fiestas?'),
 (82,'??Se considera a usted mismo como una persona animada?'),
 (83,'??Est?? convencido de que en esta vida es necesario ser un poco \"zorro \" con la gente?'),
 (84,'??Cree que al que se destaca, en seguida tratan de hundirlo?'),
 (85,'??Llega alguna vez tarde a su trabajo?'),
 (86,'??Se siente deprimido a veces sin saber exactamente por qu???'),
 (87,'Cuando hace algo mal ??Piensa mucho en ello?'),
 (88,'??Cambia de humor con facilidad?'),
 (89,'??Cree que la vida ha sido justa con usted?'),
 (90,'??Le gusta tener muchas relaciones sociales?'),
 (91,'??Ha hecho alguna vez algo de lo que tenga que avergonzarse?'),
 (92,'Sinceramente, ??se considera capaz de hacer las cosas mejor que la mayor??a?'),
 (93,'??Cree que la gente habla de usted con frecuencia?'),
 (94,'??Ha perdido el control de sus nervios alguna vez?'),
 (95,'??Protesta siempre que se comete una injusticia con usted?'),
 (96,'??Se siente alegre unas veces, y desgraciado otras, sin que haya razones claras para ello?'),
 (97,'??Le resulta dif??cil participar de la alegr??a general en las reuniones y fiestas?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (98,'Por lo general, ??es usted una persona despreocupada?'),
 (99,'??Le cambia f??cilmente el humor, seg??n le vayan las cosas?'),
 (100,'??Pagar??a usted impuestos a??n sabiendo que nadie le iba a descubrir si no los pagaba?'),
 (101,'??Cree que la vida hay que ajustar??a a ideales y normas fijas?'),
 (102,'??Le resulta dif??cil callarse en las discusiones?'),
 (103,'??Le gustan los trabajos que requieren mucho cuidado y atenci??n en los detalles?'),
 (104,'??Hay ocasiones en que lo ??nico que desea es estar s??lo y que lo dejen en paz?'),
 (105,'??Cree usted, que en realidad, el mundo est?? gobernado por poderes secretos que poqu??sima gente conoce?'),
 (106,'??Le gusta permanecer en segundo t??rmino en las fiestas y reuniones p??blicas?'),
 (107,'??Cree que un pu??ado de hombres decididos pueda reformar la sociedad?'),
 (108,'??Hay noches en que las preocupaciones le tienen despierto mucho tiempo?'),
 (109,'??Reconoce que tiene el genio un poco violento?'),
 (110,'Entre las personas que conoce, ??Hay algunas que le sean profundamente antip??ticas?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (111,'??Le parece que muchas cosas le han salido mal debido a envidias y enemistades?'),
 (112,'??Opina que la mujer debe gozar de igual libertad que el hombre?'),
 (113,'Cu??ndo algo le sale mal, ??lo olvida enseguida?'),
 (114,'Por lo general ??es usted quien da el primer paso para entablar una nueva amistad?'),
 (115,'??Es usted distra??do?'),
 (116,'??Disfruta en las manifestaciones de entusiasmo colectivo, como f??tbol, la feria, etc.?'),
 (117,'Por lo general ??mantiene oculto sus prop??sitos?'),
 (118,'Cuando no se sale con la suya ??se conforma f??cilmente?'),
 (119,'??Se le ha criticado m??s de lo debido?'),
 (120,'??Encuentra que en el mundo actual no se puede fiar uno de nadie?'),
 (121,'??Le cuesta mucho olvidar las ofensas, aunque las haya perdonado desde el primer momento?'),
 (122,'Cuando se le mete algo en la cabeza, ??no para hasta realizarlo?'),
 (123,'Por la calle, ??se fijan en usted las personas de otro sexo?'),
 (124,'Durante los ??ltimos cinco a??os ??ha ocupado alg??n cargo directivo en juntas deportivas, ben??ficas, sociales, etc.?'),
 (125,'??Cambia de aficiones con facilidad?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (126,'??Se le va a veces la imaginaci??n, de modo que pierde el hilo de lo que est?? haciendo?'),
 (127,'Cuando est?? deprimido ??busca alguien que le anime?'),
 (128,'??Hay ocasiones en que se siente solo en medio de la gente?'),
 (129,'Si llega tarde a una conferencia, ??prefiere quedarse de pie mejor que atravesar la sola para sentarse?'),
 (130,'??Ha recaudado alguna vez fondos para una causa que le interese?'),
 (131,'??Le gusta m??s el cine que el baile?'),
 (132,'??Rega??ar??a bruscamente a un subalterno suyo por no haberle tenido un trabajo a tiempo?'),
 (133,'Cuando se encarga de algo ??prefiere asumir la responsabilidad usted solo?'),
 (134,'??Cree que el respeto a las costumbres sociales constituye un aspecto esencial de la vida humana?'),
 (135,'??Suele tomarse m??s responsabilidades y quehaceres de los que le corresponden?'),
 (136,'??Le desagrada la disciplina?'),
 (137,'??Pasa a veces por per??odos en que se siente muy solo?'),
 (138,'??Ha experimentado en la vida muchas amarguras?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (139,'Por lo general, ??comprende mejor los problemas estudi??ndolos usted solo que discuti??ndolos con otros?'),
 (140,'Si un camarero le sirve mal, ??le llama usted la atenci??n?'),
 (141,'Si alguien murmura de usted, ??le aborda abiertamente?'),
 (142,'??Le irrita que se hablen ciertos asuntos delante de usted?'),
 (143,'??Le molesta que le observen mientras trabaja?'),
 (144,'??Le gusta intervenir en la organizaci??n de fiestas, reuniones, etc.?'),
 (145,'??Ha sentido envidia alguna vez?'),
 (146,'??Est?? convencido de que efectivamente se cumple el dicho \"el que la sigue la mata?'),
 (147,'??Se entusiasma f??cilmente con ideas o proyectos nuevos?'),
 (148,'??Le molesta ver objetos mal colocados, cuadros torcidos, etc. ?'),
 (149,'??Se considera usted una persona de mucha fuerza de voluntad?'),
 (150,'??Tiende aponerse colorado en las situaciones embarazosas?'),
 (151,'??Acostumbra a llevar el reloj un poco adelantado?'),
 (152,'??Le molesta llevar flojo el nudo de la corbata?'),
 (153,'??Olvida a veces d??nde ha dejado las cosas?');
INSERT INTO `tb_cep` (`idcep`,`preguntas`) VALUES 
 (154,'??Suele excederse al dar propinas?'),
 (155,'??Prefiere una vida tranquila a una vida de ??xitos?'),
 (156,'Despu??s de haber echado una carta ??duda de si las se??as (estampillas, direcci??n, etc.) ir??an bien puestas?');
/*!40000 ALTER TABLE `tb_cep` ENABLE KEYS */;


--
-- Definition of table `tb_epq`
--

DROP TABLE IF EXISTS `tb_epq`;
CREATE TABLE `tb_epq` (
  `idepq` int(10) unsigned NOT NULL auto_increment,
  `preguntas` varchar(200) NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  `escala` varchar(2) NOT NULL,
  PRIMARY KEY  (`idepq`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COMMENT='preguntas de la F';

--
-- Dumping data for table `tb_epq`
--

/*!40000 ALTER TABLE `tb_epq` DISABLE KEYS */;
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (1,'??Tiene Ud. muchos ??hobbys??, muchas aficiones?','1','E'),
 (2,'??Le preocupa tener deudas?','0','P'),
 (3,'??Tiene a menudo altibajos su estado de animo?','1','N'),
 (4,'??Ha sido alguna vez acaparador, cogiendo m??s de lo que le correspondia?','1','S'),
 (5,'??Es Ud. una persona conversadora?','1','E'),
 (6,'??Lo pasaria muy mal si viese sufrir a un ni??o o a un animal?','0','P'),
 (7,'??Se siente alguna vez desgraciado sin  ninguna raz??n?','1','N'),
 (8,'??Es Ud. de los que cierra las puertas de su casa cuidadosamente todas las noches?','0','S'),
 (9,'??Tomar??a Ud. drogas o medicamentos que pudieran tener efectos desconocidos o peligrosos?','1','P'),
 (10,'??Se preocupa Ud. a menudo por cosas que no deber??a haber hecho o dicho?','1','N'),
 (11,'??Ha quitado Ud. algo que no le pertenec??a, aunque no fuese m??s un alfiler o un bot??n?','1','S'),
 (12,'??Es Vd. una persona animada, alegre?','1','E'),
 (13,'??Le gusta conocer a gente nueva, hacer amistades?','0','P'),
 (14,'??Es Ud. una persona irritable?','1','N');
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (15,'Cuando promete hacer algo, ??cumple su promesa a pesar de los muchos inconvenientes que se puedan presentar?','0','S'),
 (16,'Normalmente, ??puede alerjarse y disfrutar en una reuni??n social animada?','1','E'),
 (17,'??Se hieren sus sentimientos con facilidad?','1','N'),
 (18,'??Ha roto o perdido Ud. algo que pertenecia a otra persona?','1','S'),
 (19,'??Tiene Ud. a mantenerse en segundo plano en las reuniones sociales?','0','E'),
 (20,'??Disfruta Ud. hiriendo o mortificando a personas que ama o quiere?','1','P'),
 (21,'??Se siente a menudo arto, ??hasta la coronilla???','1','N'),
 (22,'??Habla aveces de cosas que Ud. no sabe nada?','1','S'),
 (23,'??Le gusta mucho salir?','1','E'),
 (24,'??Est?? Ud. siempre dispuesto a admitir un error cuando lo ha cometido?','0','P'),
 (25,'??Le asaltan a menudo sentimientos de culpa?','1','N'),
 (26,'??Piensa Ud. que el matrimonio esta pasado de moda y deber??a suprimirse?','1','S'),
 (27,'??Tiene Ud. enemigos que quieren hacerle da??o?','1','P');
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (28,'??Se considera Ud. una persona nerviosa?','1','N'),
 (29,'??Cree que los sistemas de seguros son una buena idea?','0','S'),
 (30,'??Prefiere Ud. leer a conocer gente?','0','E'),
 (31,'??Disfruta gastando bromas que aveces pueden herir o molestar a otras personas?','1','P'),
 (32,'??Se considera Ud. una persona despreocupada, feliz?','0','N'),
 (33,'??Ha dicho Ud. alguna vez algo malo o malintencionado acerca de alguien?','1','S'),
 (34,'??Tiene Ud. muchos amigos?','1','E'),
 (35,'??Se intereza por el porvenir de su familia?','0','P'),
 (36,'??Es Ud. una persona preocupadiza?','1','N'),
 (37,'Cuando era ni??o, ??fue alguna vez descarado con sus padres?','1','S'),
 (38,'??Toma Ud. generalmente la iniciativa para hacer nuevos amigos?','1','E'),
 (39,'??Sufre Ud. de insomnio?','1','P'),
 (40,'??Se preocupa Ud. acerca de las cosas terribles que puedan suceder?','1','N'),
 (41,'??Son buenas y convenientes todas sus constumbres?','0','S'),
 (42,'??Es Ud. de los que a veces fanfarronean un poco?','1','E');
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (43,'??Le gusta alternar con sus amistades?','0','P'),
 (44,'??Se considera Ud. tenso, irritable, ??de poco aguante???','1','N'),
 (45,'??Ha hecho alguna vez trampas en el juego?','1','S'),
 (46,'Si se encuentra un ni??o perdido entre una muchedumbre de gente, ??se compadecer??a de ??l?','0','P'),
 (47,'??Se preocupa Ud. acerca de su salud?','1','N'),
 (48,'??Se a aprovechado Ud. alguna vez de otra persona?','1','S'),
 (49,'??Permanece Ud. generalmente callado cuando est?? con otras personas?','0','E'),
 (50,'??Le molesta la gente que conduce con cuidado?','1','P'),
 (51,'??Duda mucho antes de tomar cualquier decisi??n, por peque??a que sea?','1','N'),
 (52,'Cuando era ni??o, ??hac??a lo que le mandaban inmediatamente y sin protestar?','0','S'),
 (53,'??Le resulta f??cil animar una reuni??n social que est?? resultando aburrida?','1','E'),
 (54,'??Para Ud. tienen la mayoria de las cosas el mismo sabor?','1','P'),
 (55,'??Se ha sentido a menudo desanimado, cansado, sin ninguna raz??n?','1','N'),
 (56,'??Piensa que la gente pasa demasiado tiempo preocup??ndose por su futuro con ahorros y seguros?','1','S');
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (57,'??Le gusta contar chistes y an??cdotas a sus amigos?','1','E'),
 (58,'??Le gusta llegar a tiempo a sus citas?','0','P'),
 (59,'??Siente Ud. a menudo que la vida es muy aburrida?','1','N'),
 (60,'??Dejar??a Ud. de pagar sus impuestos si estuviera seguro de que nunca lo descubrir??an?','1','S'),
 (61,'??Le gusta mezclarse con la gente?','1','E'),
 (62,'??Hay personas que evitan encontrarse con Ud.?','1','P'),
 (63,'??Le preocupa mucho su apariencia externa?','1','N'),
 (64,'??Le importan mucho los buenos modales y la limpieza?','0','S'),
 (65,'??Es o fue su madre una buena mujer?','0','P'),
 (66,'??Ha deseado alguna vez morirse?','1','N'),
 (67,'??Ha insistido alguna vez en salirse con la suya?','1','S'),
 (68,'??Tiene Ud. casi siempre una respuesta r??pida, a mano, cuando la gente le habla?','1','E'),
 (69,'??Trata Ud. de no ser grosero, mal educado, con la gente?','0','P'),
 (70,'??Se queda preocupado demasiado tiempo despu??s de una experiencia embarazosa molesta?','1','N'),
 (71,'??Ha llegado Ud. alguna vez tarde a una cita o al trabajo?','1','S');
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (72,'??Le gusta hacer cosas en las que tenga que actuar con rapidez?','1','E'),
 (73,'Cuando Ud. tiene que abordar el autob??s, ??llega a menudo en el ??ltimo momento?','1','P'),
 (74,'??Sufre Ud. de los ??nervios???','1','N'),
 (75,'??Se lava siempre las manos antes de las comidas?','0','S'),
 (76,'??Comienza a menudo actividades que le ocupan m??s tiempo del que realmente dispone?','1','E'),
 (77,'??Se rompe f??cilmente su amistad con otras personas sin que Vd. tenga la culpa?','1','P'),
 (78,'??Se siente a menudo solo?','1','N'),
 (79,'??Deja Ud. a veces para ma??ana lo que puede hacer hoy?','1','S'),
 (80,'??Es Ud. capaz de animar, de poner en marcha una reuni??n social?','1','E'),
 (81,'??Le dar??a pena ver a un animal cogido en una trampa?','0','P'),
 (82,'??Se siente f??cilmente herido cuando la gente le encuentra fallos a Ud. o a su trabajo?','1','N'),
 (83,'??Piensa que tener un seguro de enfermedad es una tonter??a?','1','S'),
 (84,'??Le gusta hacer rabiar algunas veces a los animales?','1','P');
INSERT INTO `tb_epq` (`idepq`,`preguntas`,`respuesta`,`escala`) VALUES 
 (85,'??Se encuentra Ud. algunas veces rebosante de energ??a y otras veces lento y apagado?','1','N'),
 (86,'??Practica Ud. siempre lo que predica?','0','S'),
 (87,'??Le gusta que haya mucha animaci??n, bullicio, a su alrededor?','1','E'),
 (88,'??Le gustar??a que otras personas le tuvieran miedo?','1','P'),
 (89,'??Es Ud. susceptible o se le molesta f??cilmente con ciertas cosas?','1','N'),
 (90,'??Respetar??a siempre su lugar en una cola, a pesar de todo?','0','S'),
 (91,'??Piensan otras personas que Ud. es muy en??rgico y animado?','1','E'),
 (92,'??Prefiere normalmente salir solo?','1','P'),
 (93,'??Le hace perder el apetito cualquier contrariedad, por peque??a que ??sta sea?','1','N'),
 (94,'??Considera que podr??a portarse mejor con algunos de sus amigos?','1','S');
/*!40000 ALTER TABLE `tb_epq` ENABLE KEYS */;


--
-- Definition of table `tb_num_prue`
--

DROP TABLE IF EXISTS `tb_num_prue`;
CREATE TABLE `tb_num_prue` (
  `idnum_prue` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`idnum_prue`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_num_prue`
--

/*!40000 ALTER TABLE `tb_num_prue` DISABLE KEYS */;
INSERT INTO `tb_num_prue` (`idnum_prue`) VALUES 
 (1),
 (2);
/*!40000 ALTER TABLE `tb_num_prue` ENABLE KEYS */;


--
-- Definition of table `tb_opcotis`
--

DROP TABLE IF EXISTS `tb_opcotis`;
CREATE TABLE `tb_opcotis` (
  `idotis` int(10) unsigned NOT NULL,
  `A` varchar(75) NOT NULL,
  `B` varchar(75) NOT NULL,
  `C` varchar(75) NOT NULL,
  `D` varchar(75) NOT NULL,
  `E` varchar(90) NOT NULL,
  KEY `FK_tb_opcotis_1` (`idotis`),
  CONSTRAINT `FK_tb_opcotis_1` FOREIGN KEY (`idotis`) REFERENCES `tb_otis` (`idotis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='opciones de E; InnoDB free: 10240 kB; (`idotis`) REFER `dbte';

--
-- Dumping data for table `tb_opcotis`
--

/*!40000 ALTER TABLE `tb_opcotis` DISABLE KEYS */;
INSERT INTO `tb_opcotis` (`idotis`,`A`,`B`,`C`,`D`,`E`) VALUES 
 (1,'Cosa','Mueble','Arma','Herramienta','M??quina'),
 (2,'Conseguir','Decaer','Perder','Acceder','Ensayar'),
 (3,'La manteca','La harina','La leche','El hombre','La cosecha'),
 (4,'El humo','La motocicleta','Las ruedas','La gasolina','La bocina'),
 (5,'35','40','42','45','48'),
 (6,'La pierna','El pulgar','El dedo','El pu??o','La rodilla'),
 (7,'Miente','Bromea','Enga??a','Se divierte','Se alaba'),
 (8,'Seria','Ansiosa','Trabajadora','En??rgica','T??mida'),
 (9,'El dedo','la Aguja','El hilo','La mano','La costura'),
 (10,'Hermano','Sobrino','Primo','T??o','Nieto'),
 (11,'6.456','8.968','4.265','5.064','4.108'),
 (12,'Probable','Seguro','Dudoso','Posible','Diferido'),
 (13,'Norte','Polo','Ecuador','Sur E.','Oeste'),
 (14,'Tristeza','Humildad','Pobreza','Variedad','Altaner??a'),
 (15,'Pera','Pl??tano','Naranja','Pelota','Higo'),
 (16,'Una cosa redonda que hace tic-tac','Un aparato que se coloca en las torres','Un instrumento redondo con una cadena','Un instrumento que mide el tiempo','Una cosa redonda que tiene aguja y un cristal'),
 (17,'7','4','11','3','10');
INSERT INTO `tb_opcotis` (`idotis`,`A`,`B`,`C`,`D`,`E`) VALUES 
 (18,'A la carrera','Al caballo','Al tranv??a','Al tren','A la bicicleta'),
 (19,'Con el fin que los transe??ntes o peatones sepan en donde est??n','Para que se puedan ver bien los articulos expuestos y la gente sienta deseo','Porque los comercios pagan muy barata la corriente el??ctrica','Para aumentar la iluminaci??n de la calle','Porque la alcald??a les obliga'),
 (20,'Manzana','??rbol','Ciruela','Jugo','C??scara'),
 (21,'La J','La G','La M','La L','La N'),
 (22,'La presidencia del consejo de Ministros','El senado','La Rep??blica','Un mon??rquico','Un republicano'),
 (23,'La almohada','El conejo','El p??jaro','La cabra','La cama'),
 (24,'Un animal terrestre','Un ser que tiene cuatro patas y una cola','Un animal peque??o y avispado','Un carnero joven','Un animalito que come hierba'),
 (25,'Suave','Peque??o','Macizo','Gris','Ruido'),
 (26,'Muy bueno','Mediano','Malo','Nulo','Superior'),
 (27,'Billete','Hueso','Cuerda','L??piz','Llave'),
 (28,'Rabia','Piedad','Desprecio','Desd??n','A??oranza');
INSERT INTO `tb_opcotis` (`idotis`,`A`,`B`,`C`,`D`,`E`) VALUES 
 (29,'Exploraci??n','Adaptaci??n','Renovaci??n','Novedad','Invenci??n'),
 (30,'Vuelo','Miel','Alas','Cera','Aguij??n'),
 (31,'7','6','5','8','9'),
 (32,'Los caballos son cada d??a m??s escasos','Los caballos se desbocan f??cilmente','Los autos nos hacen ganar tiempo','Los autos son m??s econ??micos que los carros','Las reparaciones de los autos son m??s baratas que el mantenimiento de los caballos'),
 (33,'La manzana','El huevo','El jugo','El melocot??n','La gallina'),
 (34,'Juez','Albergue','Doctor','C??rtel','Sentencia'),
 (35,'Las S','La N','La O','La D','La C'),
 (36,'10','5','8','3','25'),
 (37,'Se va','Decrece','Se agota','Muere','Desaparece'),
 (38,'Hay oro que no brilla','No hay que dejarse llevar por las apariencias','El diamante es m??s brillante que el oro','No hay que llevar fantas??a que imite oro','Hay gente a quienes les gusta ostentar sus riquezas'),
 (39,'La D','La K','La M','La S','La A'),
 (40,'Es preferible poseer una peque??a cosa que esperar una grande','El coraz??n fuerte no se deja rendir por los elogios','Ning??n hombre suele apartarse de la verdad sin enga??arse a s?? mismo','El que est?? en todas partes no est?? en ninguna','Cuando se tiene una cosa hay que procurar conservarla'),
 (41,'Reto??o','Hoja','??rbol','Rama','Tronco');
INSERT INTO `tb_opcotis` (`idotis`,`A`,`B`,`C`,`D`,`E`) VALUES 
 (42,'La D','La Q','La A','La C','La Y'),
 (43,'Mayor','M??s peque??o','Iguales','No se puede saber','---'),
 (44,'Raspador','Queso','Gruta','Noche','Pintura'),
 (45,'La G','La T','La S','La C','La R'),
 (46,'Resu??lvete a hacer lo que debes y haz sin falta lo que hayas resuelto','Hay que ganarse la vida a fuerza de amor','No se deben menospreciar las cosas peque??as','En casa pobre no es necesario granero','Las personas deben ayudarse unas a otras'),
 (47,'Carlos es mayor que Juan','Juan y Carlos tienen la misma edad','Carlos es m??s joven que Juan','Juan es menor que Carlos','Jos?? es el menor de los tres'),
 (48,'La T','La P','La D','La B','La S'),
 (49,'10','12','13','15','8'),
 (50,'Un error','Una afirmaci??n voluntariamente falsa','Una afirmaci??n involuntariamente falsa','Una exageraci??n','Una respuesta inexacta'),
 (51,'La M','La Y','La S','La G','La P'),
 (52,'Permanente','Firme','Estacionaria','S??lida','Verdadera'),
 (53,'Andr??s es mayor que Luis','Pablo es el m??s joven','Andr??s y Luis tienen la misma edad','El mayor de todos es Luis','Pablo es mayor que Andr??s');
INSERT INTO `tb_opcotis` (`idotis`,`A`,`B`,`C`,`D`,`E`) VALUES 
 (54,'??rbol','Mu??eco','Carnero','Pluma','Piel'),
 (55,'El hierro batido en fri??, es malo','No se pueden hacer varias cosas al mismo tiempo','Hay que saber aprovechar el momento oportuno','Los herreros han de trabajar siempre de prisa','El trabajo del hierro es cansado'),
 (56,'La S','La M','La H','La D','La A'),
 (57,'El estado','El departamento','La ciudad','El patrono','El juez'),
 (58,'1','2','3','6','5'),
 (59,'Promesa','Debate','Amnist??a','Proceso','Convenio'),
 (60,'La E','La F','La El','La Es','La D'),
 (61,'2','3','4','5','6'),
 (62,'Un tubo de cristal graduado que contiene mercurio','Un instrumento para medir la fiebre','Un aparato muy sensible al calor','Un instrumento para medir la temperatura','Un objeto que utilizan los m??dicos'),
 (63,'Bravo','Busto','Brocha','Buj??a','Breve'),
 (64,'10','14','16','24','6'),
 (65,'Banal','Vivo','Dif??cil','Raro','Interesante'),
 (66,'Nav??o','Ejercito','Rey','Rep??blica','Soldado'),
 (67,'La A','La V','La H','La B','La N');
INSERT INTO `tb_opcotis` (`idotis`,`A`,`B`,`C`,`D`,`E`) VALUES 
 (68,'Un animal que tiene cola','Un ser viviente','Una cosa que trabaja','Un animal que transporta al jinete','Un rumiante'),
 (69,'La K','La P','La B','La O','La Y'),
 (70,'La A','La M','La Q','La D','La L'),
 (71,'Juez','Nervio','Hora','Norte','Labio'),
 (72,'La A','La E','La L','La R','La B'),
 (73,'4','17','20','15','16'),
 (74,'10','5','2','4','25'),
 (75,'3','4','1','7','8');
/*!40000 ALTER TABLE `tb_opcotis` ENABLE KEYS */;


--
-- Definition of table `tb_otis`
--

DROP TABLE IF EXISTS `tb_otis`;
CREATE TABLE `tb_otis` (
  `idotis` int(10) unsigned NOT NULL auto_increment,
  `preguntas` varchar(230) NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  PRIMARY KEY  (`idotis`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COMMENT='preguntas de la E';

--
-- Dumping data for table `tb_otis`
--

/*!40000 ALTER TABLE `tb_otis` DISABLE KEYS */;
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (1,'??Qu?? expresa mejor lo que es un martillo?','D'),
 (2,'??Cu??l de estas cinco palabras significa lo contrario de GANAR?','C'),
 (3,'La hierba es para la vaca lo que el pan es para...','D'),
 (4,'??Qu?? es para el autom??vil lo que el carb??n es para la locomotora?','D'),
 (5,'Los n??meros que vienen aqu?? debajo forma una serie y uno de ellos no es correcto ??Qu?? n??mero deberia estar en su lugar? \r\n 5 10 15 20 25 30 35 39 45 50','B'),
 (6,'La mano es para el brazo lo que el pi?? es para...','A'),
 (7,'De un muchacho que no hace m??s que hablar de sus cualidades y de su sabidur??a, se dice que...','E'),
 (8,'De una persona que tiene deseos de hacer una cosa pero teme el fracaso, se dice que es...','E'),
 (9,'El sombrero es para la cabeza lo que el dedal es para...','A'),
 (10,'El hijo de la hermana de mi padre es mi...','C'),
 (11,'??Cu??l de estas cantidades es la mayor?','B'),
 (12,'Cuado sabemos que un acontecimiento va a pasar sin ninguna clase de dudas, decimos que es...','B'),
 (13,'??Qu?? palabra indica el lado opuesto a ESTE?','E');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (14,'??Qu?? palabra indica lo contrario a SOBERBIA?','B'),
 (15,'??cu??l de estas cinco cosas no deber??a agruparse a las dem??s?','D'),
 (16,'??Qu?? definici??n de ??stas expresa m??s exactamente lo que es un reloj?','D'),
 (17,'Si una persona, al salir de su casa, anda siete pasos hacia la derecha y despu??s retrocede cuatro hacia la izquierda,??A cu??ntos pasos esta de su casa?','D'),
 (18,'Si comparamos el autom??vil a una carreta, ??a que deber??amos comparar una motocicleta?','E'),
 (19,'??Cu??l es la raz??n por la cual las fachadas de los comercios est??n muy iluminadas?','B'),
 (20,'??Cu??l de estas cinco cosas tiene m??s parecido con manzana, melocot??n y pera?','C'),
 (21,'En el abecedario, ??Qu?? letra sigue a la K?','D'),
 (22,'El rey es a la monarqu??a lo que el presidente es a...','C'),
 (23,'La lana es para el carnero lo que las plumas son para','C'),
 (24,'??Cu??l de estas definiciones expresa m??s exactamente lo que es un cordero?','D'),
 (25,'Pesado es a plomo lo que sonoro es a...','E');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (26,'Mejor es a bueno lo que peor es a...','C'),
 (27,'??Cu??l de estas cosas tiene m??s parecido con tenazas, alambre y clavo?','E'),
 (28,'Ante el dolor de los dem??s normalmente sentimos...','B'),
 (29,'Cuando alguien concibe una nueva m??quina, se dice que ha hecho una...','E'),
 (30,'??Qu?? es para la abeja lo que las u??as son para el gato?','E'),
 (31,'Uno de los n??meros de esta serie est?? equivocado.  ??Qu?? n??mero deber??a figurar en su lugar? \r\n 1  7  2  7  3  7  4  7  5  7  6  7  8  7','A'),
 (32,'??Cu??l es la principal raz??n por la que vemos cada d??a sustituir los caballos por los autom??viles?','C'),
 (33,'La corteza es para la naranja y la vaina es para el frijol lo que la c??scara es para...','B'),
 (34,'??Qu?? es para el criminal lo que el hospital es para el enfermo?','D'),
 (35,'Si estos n??meros estuviesen ordenados, ??Con qu?? letra empezar??a el del centro? \r\n Ocho Diez Seis Nueve Siete','C'),
 (36,'A 30 centavos la cartulina, ??Cu??ntas podr??n comprarse por 3 d??lares?','A');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (37,'De una cantidad que disminuye se dice que...','B'),
 (38,'Hay un refr??n que dice &#34;No todo lo que brilla es oro&#34; y esto significa...','B'),
 (39,'En una lengua extranjera KOLO quiere decir \"ni??o\" y DAAK KOLO \"ni??o bueno\". ??Por qu?? letra empieza la palabra que significa \"bueno\" en ese idioma?','A'),
 (40,'Este refr??n, \"M??s vale p??jaro en mano que cien volando\", quiere decir:','A'),
 (41,'??Cu??l de estas cinco cosas es m??s completa?','C'),
 (42,'Si estas palabras estuviesen convenientemente ordenadas para formar una frase, ??Porqu?? letra empezar??a la tercera palabra?\n CON DIME ERES QUIEN DIR?? ANDAS Y TE QUIEN','B'),
 (43,'Si Jorge   es   mayor   que   Pedro,   y   Pedro es mayor que Juan,   entonces Jorge es __________ que Juan.','A'),
 (44,'??Cu??l de estas palabras es la primera que aparece en un diccionario?','C'),
 (45,'Si las palabras General, Teniente, Soldado, Coronel y Recluta estuviesen colocadas indicando el orden jer??rquico que significan, ??Con cu??l letra empezar??a la del centro?','B'),
 (46,'Hay un refr??n que dice: \"Un grano no hace granero, pero ayuda al compa??ero\", y esto significa:','C');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (47,'Si Juan es mayor que Jos??, y Jos?? tiene la misma edad que Carlos, entonces...','C'),
 (48,'Ordenando la frase que viene aqu?? debajo, ??Con cu??l letra empezar??a la ??ltima palabra? A FALTA TORTILLAS BUENAS PAN SON DE','A'),
 (49,'Si en una caja grande hubieran dos m??s peque??as y dentro de cada una de ??stas dos hubieran cinco ??Cu??ntas habr??a en total?','C'),
 (50,'??Qu?? indica mejor lo que es una mentira?','B'),
 (51,'En un idioma extranjero SOTO GRON quiere decir \"muy caliente\" y PASS GRON \"muy fri??\", ??Por qu?? letra empieza la palabra que significa \"muy\" en ese idioma?','D'),
 (52,'La palabra que mejor expresa que una cosa o instituci??n se mantiene a lo largo del tiempo es ...','A'),
 (53,'Si Pablo es mayor que Luis y si Pablo es m??s joven que Andr??s, entonces...','A'),
 (54,'??Cu??l de estas cosas tiene m??s parecido con serpiente, vaca y gorri??n?','C'),
 (55,'Hay refr??n que dice: \"A hierro caliente, batir de repente\", y esto significa:','C'),
 (56,'Si las palabras que vienen aqu?? debajo estuviesen ordenadas, ??Con cu??l letra empezar??a la del centro? Semana A??o Hora Segundo D??a Mes Minuto','D');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (57,'El capit??n es para el barco lo que el alcalde es para ...','C'),
 (58,'Uno de los n??meros de la serie que viene aqu?? debajo est?? equivocado. ??Qu?? n??mero debiera estar en su lugar? \n 2   3   4   3   2   3   4   3   2   4','C'),
 (59,'Si un pleito se resuelve por mutuas concesiones, se dice que ha habido...','E'),
 (60,'La oraci??n que viene aqu?? debajo tiene las palabras desordenadas. ??Qu?? letra debe marcarse atendiendo a la frase ordenada? FRASE LA LETRA SE??ALE PRIMERA ESTA DE','D'),
 (61,'En la serie de n??meros, que aparece aqu?? debajo, cuente todos los 5 que est??n delante de un 7. ??Cu??ntos son? \r\n 7  5  3  5  7  2  3  7  5  6  7  7  2  5  7  3  4  7  7  5  2  0  7  5  7  8  3  7  2  5  1  7  9  6  5  7','C'),
 (62,'??Qu?? indica mejor lo que es un term??metro?','D'),
 (63,'??Cu??l de estas palabras es la primera que aparece en un diccionario?','A'),
 (64,'Uno de los n??meros de la serie que aparece aqu?? debajo est?? equivocado, ??Qu?? n??mero debiera estar en su lugar? \r\n 1     2    4    8    12    32    64','C'),
 (65,'??Cu??l de estas palabras significa lo contrario de COM??N?','D');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (66,'??Cu??l de estas cinco cosas tiene m??s parecido con Presidente, Almirante y General?','C'),
 (67,'Si las palabras que aparecen aqu?? debajo estuvieran ordenadas, ??Con que letra empezar??a la del centro? Adolescente Ni??o Hombre Viejo Bebe','A'),
 (68,'??Cu??l de estas definiciones indica m??s exactamente lo que es un caballo?','D'),
 (69,'En un idioma extranjero BECO FRAC quiere decir \"un poco pan\", KLUP FRAC \"un poco de leche\" y BECO OTOH KLUP FRAC \"un poco de pan y de leche\". ??Con que letra empieza la palabra que significa Y en dicho idioma?','D'),
 (70,'Si las palabras que aparecen aqu?? debajo estuviesen convenientemente ordenadas para ordenar una frase, ??Con que letra empezar??a la tercera palabra? MADRUGA QUIEN LE DIOS A AYUDA','B'),
 (71,'??Cu??l de estas palabras es la ??ltima que aparece en un diccionario?','D'),
 (72,'Si se ordena la frase que aparece aqu?? debajo, ??Que letra cumple lo que se dice en ella? EN LETRA RECUADRO A ESCRIBA LA EL','A'),
 (73,'Uno de los n??meros de la serie que aparece aqu?? debajo est?? equivocado, ??Qu?? n??mero debiera estar en su lugar? \n 1 2 5 6 9 10 13 14 16 18','B');
INSERT INTO `tb_otis` (`idotis`,`preguntas`,`respuesta`) VALUES 
 (74,'Si un ciclista recorre 250 metros en 25 segundos, ??Cu??ntos metros recorrer?? en un quinto de segundo?','C'),
 (75,'Si la frase que aparece aqu?? debajo estuviera ordenada, ??Que n??mero cumple lo que en ella se dice? Y SUMA CUATRO ESCRIBA TRES LA UNO DE','E');
/*!40000 ALTER TABLE `tb_otis` ENABLE KEYS */;


--
-- Definition of table `tb_profesorados`
--

DROP TABLE IF EXISTS `tb_profesorados`;
CREATE TABLE `tb_profesorados` (
  `cod` varchar(8) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  PRIMARY KEY  (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_profesorados`
--

/*!40000 ALTER TABLE `tb_profesorados` DISABLE KEYS */;
INSERT INTO `tb_profesorados` (`cod`,`nombre`) VALUES 
 ('P70402','PROFESORADO EN EDUCACI??N B??SICA PARA PRIMERO Y SEGUNDO CICLOS '),
 ('P70403','PROFESORADO EN EDUCACI??N INICIAL Y PARVULARIA '),
 ('P70923','PROFESORADO EN MATEM??TICA PARA TERCER CICLO DE EDUCACI??N Y EDUCACI??N MEDIA '),
 ('P70932','PROFESORADO EN BIOLOG??A PARA TERCER CICLO DE EDUCACI??N B??SICA Y EDUCACI??N MEDIA ');
/*!40000 ALTER TABLE `tb_profesorados` ENABLE KEYS */;


--
-- Definition of table `tb_raven`
--

DROP TABLE IF EXISTS `tb_raven`;
CREATE TABLE `tb_raven` (
  `idraven` int(10) unsigned NOT NULL auto_increment,
  `preguntas` varchar(5) NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  PRIMARY KEY  (`idraven`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COMMENT='preguntas de la letra B';

--
-- Dumping data for table `tb_raven`
--

/*!40000 ALTER TABLE `tb_raven` DISABLE KEYS */;
INSERT INTO `tb_raven` (`idraven`,`preguntas`,`respuesta`) VALUES 
 (1,'A1','4'),
 (2,'A2','5'),
 (3,'A3','1'),
 (4,'A4','2'),
 (5,'A5','6'),
 (6,'A6','3'),
 (7,'A7','6'),
 (8,'A8','2'),
 (9,'A9','1'),
 (10,'A10','3'),
 (11,'A11','4'),
 (12,'A12','5'),
 (13,'B1','2'),
 (14,'B2','6'),
 (15,'B3','1'),
 (16,'B4','2'),
 (17,'B5','1'),
 (18,'B6','3'),
 (19,'B7','5'),
 (20,'B8','6'),
 (21,'B9','4'),
 (22,'B10','3'),
 (23,'B11','4'),
 (24,'B12','5'),
 (25,'C1','8'),
 (26,'C2','2'),
 (27,'C3','3'),
 (28,'C4','8'),
 (29,'C5','7'),
 (30,'C6','4'),
 (31,'C7','5'),
 (32,'C8','1'),
 (33,'C9','7'),
 (34,'C10','6'),
 (35,'C11','1'),
 (36,'C12','2'),
 (37,'D1','3'),
 (38,'D2','4'),
 (39,'D3','3'),
 (40,'D4','7'),
 (41,'D5','8'),
 (42,'D6','6'),
 (43,'D7','5'),
 (44,'D8','4'),
 (45,'D9','1'),
 (46,'D10','2'),
 (47,'D11','5'),
 (48,'D12','6'),
 (49,'E1','7'),
 (50,'E2','6'),
 (51,'E3','8'),
 (52,'E4','2'),
 (53,'E5','1'),
 (54,'E6','5'),
 (55,'E7','1'),
 (56,'E8','6'),
 (57,'E9','3'),
 (58,'E10','2'),
 (59,'E11','4'),
 (60,'E12','5');
/*!40000 ALTER TABLE `tb_raven` ENABLE KEYS */;


--
-- Definition of table `tb_respcep`
--

DROP TABLE IF EXISTS `tb_respcep`;
CREATE TABLE `tb_respcep` (
  `idcep` int(10) unsigned NOT NULL,
  `idaspirante` varchar(10) NOT NULL,
  `idnum_prue` int(10) unsigned NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  PRIMARY KEY  (`idcep`,`idaspirante`,`idnum_prue`),
  KEY `FK_tb_respcep_2` (`idaspirante`),
  KEY `FK_tb_respcep_3` (`idnum_prue`),
  CONSTRAINT `FK_tb_respcep_1` FOREIGN KEY (`idcep`) REFERENCES `tb_cep` (`idcep`),
  CONSTRAINT `FK_tb_respcep_2` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`),
  CONSTRAINT `FK_tb_respcep_3` FOREIGN KEY (`idnum_prue`) REFERENCES `tb_num_prue` (`idnum_prue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='respuestas de la C';

--
-- Dumping data for table `tb_respcep`
--

/*!40000 ALTER TABLE `tb_respcep` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_respcep` ENABLE KEYS */;


--
-- Definition of table `tb_respcepcorrectas`
--

DROP TABLE IF EXISTS `tb_respcepcorrectas`;
CREATE TABLE `tb_respcepcorrectas` (
  `id` int(10) unsigned default NULL,
  `respuesta` varchar(2) NOT NULL,
  `escala` varchar(2) NOT NULL,
  KEY `FK_tb_respcepcorrectas_1` (`id`),
  CONSTRAINT `FK_tb_respcepcorrectas_1` FOREIGN KEY (`id`) REFERENCES `tb_cep` (`idcep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_respcepcorrectas`
--

/*!40000 ALTER TABLE `tb_respcepcorrectas` DISABLE KEYS */;
INSERT INTO `tb_respcepcorrectas` (`id`,`respuesta`,`escala`) VALUES 
 (7,'1','C'),
 (12,'3','C'),
 (18,'3','C'),
 (23,'3','C'),
 (24,'2','C'),
 (27,'3','C'),
 (30,'3','C'),
 (31,'3','C'),
 (36,'3','C'),
 (39,'2','C'),
 (40,'3','C'),
 (44,'3','C'),
 (48,'3','C'),
 (49,'3','C'),
 (52,'3','C'),
 (55,'3','C'),
 (61,'3','C'),
 (63,'3','C'),
 (66,'3','C'),
 (70,'1','C'),
 (72,'2','C'),
 (76,'2','C'),
 (80,'3','C'),
 (86,'3','C'),
 (88,'3','C'),
 (96,'3','C'),
 (99,'3','C'),
 (101,'1','C'),
 (104,'3','C'),
 (108,'3','C'),
 (119,'2','C'),
 (122,'2','C'),
 (126,'3','C'),
 (10,'1','S'),
 (14,'3','S'),
 (17,'1','S'),
 (22,'1','S'),
 (29,'1','S'),
 (33,'1','S'),
 (42,'3','S'),
 (46,'1','S'),
 (50,'1','S'),
 (56,'3','S'),
 (59,'3','S'),
 (64,'1','S'),
 (69,'1','S'),
 (74,'1','S'),
 (77,'1','S'),
 (85,'1','S'),
 (91,'1','S'),
 (100,'3','S'),
 (110,'1','S'),
 (1,'2','E'),
 (2,'1','E'),
 (3,'1','E'),
 (7,'1','E'),
 (9,'3','E'),
 (11,'1','E'),
 (13,'2','E'),
 (15,'3','E'),
 (20,'3','E'),
 (21,'3','E'),
 (24,'2','E');
INSERT INTO `tb_respcepcorrectas` (`id`,`respuesta`,`escala`) VALUES 
 (25,'1','E'),
 (28,'1','E'),
 (32,'3','E'),
 (35,'1','E'),
 (37,'3','E'),
 (39,'3','E'),
 (43,'1','E'),
 (47,'1','E'),
 (48,'3','E'),
 (51,'3','E'),
 (57,'1','E'),
 (58,'1','E'),
 (60,'1','E'),
 (61,'1','E'),
 (62,'2','E'),
 (63,'3','E'),
 (67,'1','E'),
 (75,'1','E'),
 (76,'1','E'),
 (81,'1','E'),
 (82,'1','E'),
 (87,'3','E'),
 (90,'1','E'),
 (92,'2','E'),
 (97,'3','E'),
 (98,'1','E'),
 (101,'3','E'),
 (103,'2','E'),
 (106,'3','E'),
 (113,'1','E'),
 (114,'1','E'),
 (116,'1','E'),
 (124,'1','E'),
 (125,'1','E'),
 (6,'3','P'),
 (8,'1','P'),
 (15,'1','P'),
 (16,'1','P'),
 (19,'1','P'),
 (23,'1','P'),
 (26,'1','P'),
 (34,'1','P'),
 (36,'1','P'),
 (38,'1','P'),
 (41,'1','P'),
 (45,'1','P'),
 (53,'1','P'),
 (54,'1','P'),
 (55,'1','P'),
 (65,'1','P'),
 (68,'3','P'),
 (70,'1','P'),
 (72,'3','P'),
 (73,'1','P'),
 (78,'1','P'),
 (79,'1','P'),
 (83,'1','P'),
 (84,'1','P'),
 (89,'3','P'),
 (92,'1','P'),
 (93,'1','P'),
 (95,'1','P'),
 (102,'1','P');
INSERT INTO `tb_respcepcorrectas` (`id`,`respuesta`,`escala`) VALUES 
 (105,'1','P'),
 (107,'1','P'),
 (109,'1','P'),
 (111,'1','P'),
 (112,'3','P'),
 (113,'3','P'),
 (115,'3','P'),
 (117,'1','P'),
 (118,'3','P'),
 (119,'1','P'),
 (120,'1','P'),
 (121,'1','P'),
 (122,'1','P'),
 (123,'1','P'),
 (4,'2','?'),
 (5,'2','?'),
 (71,'2','?'),
 (94,'2','?'),
 (127,'2','?'),
 (128,'2','?'),
 (129,'2','?'),
 (130,'2','?'),
 (131,'2','?'),
 (132,'2','?'),
 (133,'2','?'),
 (134,'2','?'),
 (135,'2','?'),
 (136,'2','?'),
 (137,'2','?'),
 (138,'2','?'),
 (139,'2','?'),
 (140,'2','?'),
 (141,'2','?'),
 (142,'2','?'),
 (143,'2','?'),
 (144,'2','?'),
 (145,'2','?'),
 (146,'2','?'),
 (147,'2','?'),
 (148,'2','?'),
 (149,'2','?'),
 (150,'2','?'),
 (151,'2','?'),
 (152,'2','?'),
 (153,'2','?'),
 (154,'2','?'),
 (155,'2','?'),
 (156,'2','?'),
 (1,'3','E'),
 (13,'3','E'),
 (24,'3','E'),
 (57,'2','E'),
 (58,'2','E'),
 (98,'2','E'),
 (103,'3','E');
/*!40000 ALTER TABLE `tb_respcepcorrectas` ENABLE KEYS */;


--
-- Definition of table `tb_respepq`
--

DROP TABLE IF EXISTS `tb_respepq`;
CREATE TABLE `tb_respepq` (
  `idepq` int(10) unsigned NOT NULL,
  `idaspirante` varchar(8) NOT NULL,
  `idnum_prue` int(10) unsigned NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  PRIMARY KEY  (`idepq`,`idaspirante`,`idnum_prue`),
  KEY `FK_tb_respepq_2` (`idaspirante`),
  KEY `FK_tb_respepq_3` (`idnum_prue`),
  CONSTRAINT `FK_tb_respepq_1` FOREIGN KEY (`idepq`) REFERENCES `tb_epq` (`idepq`),
  CONSTRAINT `FK_tb_respepq_2` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`),
  CONSTRAINT `FK_tb_respepq_3` FOREIGN KEY (`idnum_prue`) REFERENCES `tb_num_prue` (`idnum_prue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='respuestas de la F';

--
-- Dumping data for table `tb_respepq`
--

/*!40000 ALTER TABLE `tb_respepq` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_respepq` ENABLE KEYS */;


--
-- Definition of table `tb_respotis`
--

DROP TABLE IF EXISTS `tb_respotis`;
CREATE TABLE `tb_respotis` (
  `idotis` int(10) unsigned NOT NULL,
  `idaspirante` varchar(10) NOT NULL,
  `idnum_prue` int(10) unsigned NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  PRIMARY KEY  (`idotis`,`idaspirante`,`idnum_prue`),
  KEY `FK_tb_respotis_2` (`idaspirante`),
  KEY `FK_tb_respotis_3` (`idnum_prue`),
  CONSTRAINT `FK_tb_respotis_1` FOREIGN KEY (`idotis`) REFERENCES `tb_otis` (`idotis`),
  CONSTRAINT `FK_tb_respotis_2` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`),
  CONSTRAINT `FK_tb_respotis_3` FOREIGN KEY (`idnum_prue`) REFERENCES `tb_num_prue` (`idnum_prue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='respuestas de otis';

--
-- Dumping data for table `tb_respotis`
--

/*!40000 ALTER TABLE `tb_respotis` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_respotis` ENABLE KEYS */;


--
-- Definition of table `tb_respraven`
--

DROP TABLE IF EXISTS `tb_respraven`;
CREATE TABLE `tb_respraven` (
  `idraven` int(10) unsigned NOT NULL,
  `idaspirante` varchar(10) NOT NULL,
  `idnum_prue` int(10) unsigned NOT NULL,
  `respuesta` varchar(2) NOT NULL,
  PRIMARY KEY  (`idraven`,`idaspirante`,`idnum_prue`),
  KEY `FK_tb_respraven_2` (`idaspirante`),
  KEY `FK_tb_respraven_3` (`idnum_prue`),
  CONSTRAINT `FK_tb_respraven_1` FOREIGN KEY (`idraven`) REFERENCES `tb_raven` (`idraven`),
  CONSTRAINT `FK_tb_respraven_2` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`),
  CONSTRAINT `FK_tb_respraven_3` FOREIGN KEY (`idnum_prue`) REFERENCES `tb_num_prue` (`idnum_prue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='resputas de la B';

--
-- Dumping data for table `tb_respraven`
--

/*!40000 ALTER TABLE `tb_respraven` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_respraven` ENABLE KEYS */;


--
-- Definition of table `tb_resultadosa`
--

DROP TABLE IF EXISTS `tb_resultadosa`;
CREATE TABLE `tb_resultadosa` (
  `idaspirante` varchar(8) NOT NULL,
  `praven` int(10) unsigned NOT NULL,
  `draven` varchar(4) NOT NULL,
  `pcep_c` int(10) unsigned NOT NULL,
  `pcep_e` int(10) unsigned NOT NULL,
  `pcep_p` int(10) unsigned NOT NULL,
  `pcep_s` int(10) unsigned NOT NULL,
  `pcep_x` int(10) unsigned NOT NULL,
  `dcep` varchar(2) NOT NULL,
  `dfinal` varchar(2) NOT NULL,
  `prueba_num` int(10) unsigned NOT NULL,
  KEY `FK_tb_resultadosa_1` (`idaspirante`),
  CONSTRAINT `FK_tb_resultadosa_1` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_resultadosa`
--

/*!40000 ALTER TABLE `tb_resultadosa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_resultadosa` ENABLE KEYS */;


--
-- Definition of trigger `tb_resultadosa`
--

DROP TRIGGER IF EXISTS `tb_resultadosa`;

DELIMITER $$

CREATE DEFINER = `root`@`localhost` TRIGGER `trigger_resultadosa` BEFORE INSERT ON `tb_resultadosa` FOR EACH ROW insert into tb_auxresultados (idaspirante,dfinal,prue,num_prue) values (NEW.idaspirante,NEW.dfinal,'A',NEW.prueba_num) $$

DELIMITER ;

--
-- Definition of table `tb_resultadosb`
--

DROP TABLE IF EXISTS `tb_resultadosb`;
CREATE TABLE `tb_resultadosb` (
  `idaspirante` varchar(8) NOT NULL,
  `ciotis` int(10) unsigned NOT NULL,
  `dotis` varchar(4) NOT NULL,
  `cepq_n` int(10) unsigned NOT NULL,
  `cepq_e` int(10) unsigned NOT NULL,
  `cepq_p` int(10) unsigned NOT NULL,
  `cepq_s` int(10) unsigned NOT NULL,
  `depq` varchar(4) NOT NULL,
  `dfinal` varchar(4) NOT NULL,
  `prueba_num` int(10) unsigned NOT NULL,
  KEY `FK_tb_resultadosb_1` (`idaspirante`),
  CONSTRAINT `FK_tb_resultadosb_1` FOREIGN KEY (`idaspirante`) REFERENCES `tb_aspirantes` (`idaspirante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_resultadosb`
--

/*!40000 ALTER TABLE `tb_resultadosb` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_resultadosb` ENABLE KEYS */;


--
-- Definition of trigger `tb_resultadosb`
--

DROP TRIGGER IF EXISTS `tb_resultadosb`;

DELIMITER $$

CREATE DEFINER = `root`@`localhost` TRIGGER `trigger_resultadosb` BEFORE INSERT ON `tb_resultadosb` FOR EACH ROW insert into tb_auxresultados (idaspirante,dfinal,prue,num_prue) values (NEW.idaspirante,NEW.dfinal,'B',NEW.prueba_num) $$

DELIMITER ;

--
-- Definition of view `resultadosa`
--

DROP TABLE IF EXISTS `resultadosa`;
DROP VIEW IF EXISTS `resultadosa`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dbfmpartest2013`.`resultadosa` AS select `t1`.`idaspirante` AS `idaspirante`,`t1`.`apellido` AS `apellido`,`t1`.`nombre` AS `nombre`,`t1`.`fecha` AS `fecha`,`t1`.`edad` AS `edad`,`t1`.`sexo` AS `sexo`,`t2`.`praven` AS `praven`,`t2`.`draven` AS `draven`,`t2`.`pcep_c` AS `pcep_c`,`t2`.`pcep_e` AS `pcep_e`,`t2`.`pcep_p` AS `pcep_p`,`t2`.`pcep_s` AS `pcep_s`,`t2`.`pcep_x` AS `pcep_x`,`t2`.`dcep` AS `dcep`,`t2`.`dfinal` AS `dfinal`,`t2`.`prueba_num` AS `prueba_num`,`t1`.`profesorado` AS `profesorado` from (`dbfmpartest2013`.`tb_aspirantes` `t1` join `dbfmpartest2013`.`tb_resultadosa` `t2` on((`t1`.`idaspirante` = `t2`.`idaspirante`)));

--
-- Definition of view `resultadosb`
--

DROP TABLE IF EXISTS `resultadosb`;
DROP VIEW IF EXISTS `resultadosb`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dbfmpartest2013`.`resultadosb` AS select `t1`.`idaspirante` AS `idaspirante`,`t1`.`apellido` AS `apellido`,`t1`.`nombre` AS `nombre`,`t1`.`fecha` AS `fecha`,`t1`.`edad` AS `edad`,`t1`.`sexo` AS `sexo`,`t2`.`ciotis` AS `ciotis`,`t2`.`dotis` AS `dotis`,`t2`.`cepq_n` AS `cepq_n`,`t2`.`cepq_e` AS `cepq_e`,`t2`.`cepq_p` AS `cepq_p`,`t2`.`cepq_s` AS `cepq_s`,`t2`.`depq` AS `depq`,`t2`.`dfinal` AS `dfinal`,`t2`.`prueba_num` AS `prueba_num`,`t1`.`profesorado` AS `profesorado` from (`dbfmpartest2013`.`tb_aspirantes` `t1` join `dbfmpartest2013`.`tb_resultadosb` `t2` on((`t1`.`idaspirante` = `t2`.`idaspirante`)));

--
-- Definition of view `todos`
--

DROP TABLE IF EXISTS `todos`;
DROP VIEW IF EXISTS `todos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dbfmpartest2013`.`todos` AS select `t2`.`idaspirante` AS `idaspirante`,`t1`.`apellido` AS `apellido`,`t1`.`nombre` AS `nombre`,`t1`.`fecha` AS `fecha`,`t1`.`edad` AS `edad`,`t1`.`sexo` AS `sexo`,`t2`.`dfinal` AS `dfinal`,`t2`.`prue` AS `prue`,`t2`.`num_prue` AS `num_prue`,`t1`.`profesorado` AS `profesorado` from (`dbfmpartest2013`.`tb_auxresultados` `t2` join `dbfmpartest2013`.`tb_aspirantes` `t1` on((`t2`.`idaspirante` = `t1`.`idaspirante`))) order by `t2`.`idaspirante`,`t2`.`num_prue`;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
