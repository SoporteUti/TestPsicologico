-- MySQL dump 10.11
--
-- Host: localhost    Database: dbtestspsicologico
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary table structure for view `resultadosa`
--

DROP TABLE IF EXISTS `resultadosa`;
/*!50001 DROP VIEW IF EXISTS `resultadosa`*/;
/*!50001 CREATE TABLE `resultadosa` (
  `idaspirante` varchar(4),
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
) */;

--
-- Temporary table structure for view `resultadosb`
--

DROP TABLE IF EXISTS `resultadosb`;
/*!50001 DROP VIEW IF EXISTS `resultadosb`*/;
/*!50001 CREATE TABLE `resultadosb` (
  `idaspirante` varchar(4),
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
) */;

--
-- Table structure for table `tb_admon`
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

LOCK TABLES `tb_admon` WRITE;
/*!40000 ALTER TABLE `tb_admon` DISABLE KEYS */;
INSERT INTO `tb_admon` VALUES (1,'Lic. Jorge Alberto Mena','1','12345678','Psicologo','admin','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `tb_admon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_aspirantes`
--

DROP TABLE IF EXISTS `tb_aspirantes`;
CREATE TABLE `tb_aspirantes` (
  `idaspirante` varchar(4) NOT NULL,
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

LOCK TABLES `tb_aspirantes` WRITE;
/*!40000 ALTER TABLE `tb_aspirantes` DISABLE KEYS */;
INSERT INTO `tb_aspirantes` VALUES ('0001','0821-300192-106-0','Carlos Daniel','Asencio Ventura','P70923','2011/08/3','M',18),('0002','0731-231192-106-0','Mario Alexis','Cortes Orantes','P70921','2011/08/4','M',20),('0003','0821-181291-105-3','Xiomara Regina','De la O','P70402','','F',19),('0004','0731-231190-103-5','Sofia Liset','Alvarado Carranza','P70923','2011/08/3','F',20),('0005','0821-300991-108-7','Jose Antonio','Perez Lovato','P70402','','M',19),('0006','0821-300192-106-0','xxxxxxxx','xxxxxxxx','P70402','','M',23),('0007','0000-300192-000-0','lsdkfjdsklj','kljklj','P70921','','F',34),('0008','1111-110192-111-1','lvkxncklvnkl','nklnkln','P70921','','F',11),('0009','0821-300192-106-9',',m','lmñlm','P70402','','M',99);
/*!40000 ALTER TABLE `tb_aspirantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_auxresultados`
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

LOCK TABLES `tb_auxresultados` WRITE;
/*!40000 ALTER TABLE `tb_auxresultados` DISABLE KEYS */;
INSERT INTO `tb_auxresultados` VALUES ('0001','R','A',1),('0004','R','B',1),('0002','R','A',1);
/*!40000 ALTER TABLE `tb_auxresultados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cep`
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

LOCK TABLES `tb_cep` WRITE;
/*!40000 ALTER TABLE `tb_cep` DISABLE KEYS */;
INSERT INTO `tb_cep` VALUES (1,'¿Tiende a reducir sus amistades a un grupo escogido?'),(2,'¿Se encuentra a gusto entre mucha gente?'),(3,'¿Le gusta más actuar que pensar lo que hay que hacer?'),(4,'¿Cuándo la gente se mete con usted suele tener respuesta inmediata?'),(5,'¿Fantasea a menudo con proyectos que no se realizan nunca?'),(6,'De pequeño ¿era usted obediente?'),(7,'¿Es usted rápido y seguro en sus actos?'),(8,'¿Responde usted con dureza cuando alguien le ataca?'),(9,'¿Le molesta tener que hacer nuevas amistades?'),(10,'¿Deja a veces para mañana lo que podría hacer hoy?'),(11,'¿Toma su trabajo con naturalidad, esto es, sin preocuparse más de lo necesario?'),(12,'¿Se disgusta con facilidad?'),(13,'¿Le gusta recordar momentos felices de su vida pasada?'),(14,'Cuando promete algo, ¿lo cumple siempre, aunque sea muy desfavorable para usted?'),(15,'¿Es un poco tímido con las personas de otro sexo?'),(16,'¿Se deja de contemplaciones cuando sospecha que alguien le quiere hacer una mala jugada?'),(17,'¿Se enfurece alguna vez?'),(18,'¿Hay ocasiones en que se siente muy solo?'),(19,'¿Cree que las dificultades sólo detienen a los débiles?'),(20,'¿Le molesta mucho llegar tarde a una cita?'),(21,'¿Suele ocurrírsele las respuestas cuando ya ha pasado la ocasión?'),(22,'¿Ha fanfarroneado alguna vez?'),(23,'¿Le irrita mucho que alguien no conteste a sus cartas?'),(24,'¿Tiende a ser escrupuloso en el cumplimiento de sus obligaciones?'),(25,'¿Lo suele pasar muy bien en fiestas y reuniones sociales?'),(26,'Al decir algo ¿suele tener en cuenta lo que van a pensar los demás?'),(27,'¿Es propenso a cambiar de humor sin causa justificada?'),(28,'¿Le gusta gastar bromas a la gente?'),(29,'¿Le han cogido alguna vez en una mentira?'),(30,'¿Se le va a veces la imaginación cuando trata de concentrarse en algo?'),(31,'¿Se considera a sí mismo como un individuo nervioso?'),(32,'¿Se le ocurre con frecuencia lo que debería haber hecho cuando ya ha pasado el momento?'),(33,'¿Le molesta mucho perder en el juego?'),(34,'¿Cree usted que desgraciadamente es verdad lo que indica el dicho \"piensa mal y acertarás?'),(35,'¿Le resulta fácil, por lo general, hacer nuevas amistades?'),(36,'¿Ha tenido alguna vez la extraña sensación de ser distinto de cómo era antes?'),(37,'Cuando está trabajando ¿le molesta mucho que le interrumpan?'),(38,'¿Cree que abundan las personas envidiosas?'),(39,'¿Toma muy \"apecho \" su trabajo?'),(40,'¿Se distrae a menudo en el curso de una conversación?'),(41,'¿Le critican más de lo que se merece?'),(42,'¿Se alegra de verdad si un enemigo suyo consigue un éxito merecido?'),(43,'¿Le divierten las reuniones y fiestas más que ninguna otra cosa?'),(44,'¿Tiene a veces preocupaciones que no lo dejan dormir?'),(45,'Modestia aparte, ¿Se juzga usted superior a la gente?'),(46,'¿Murmura usted de vez en cuando?'),(47,'¿Suele pasarlo bien en las fiestas y reuniones sociales?'),(48,'¿Se considera usted una persona algo soñadora?'),(49,'¿Se siente a veces deprimido y cansado, sin ninguna razón determinada?'),(50,'¿Tiene usted a veces pensamientos o deseos que le avergonzarían si se supieran?'),(51,'¿Tiene usted a quedarse callado cuando se encuentra entre personas que conoce poco?'),(52,'¿Se encuentra a veces rebosante de energía y a veces francamente agotado?'),(53,'¿Se interpreta mal muchas de las cosas que usted dice o hace?'),(54,'¿Le gusta averiguar los motivos ocultos de la conducta ajena?'),(55,'¿Suele tener razón en las discusiones?'),(56,'¿Responde en seguida a todas las cartas que recibe?'),(57,'¿Se considera a sí mismo como una persona habladora?'),(58,'¿Prefiere los trabajos de acción a los de pensamiento?'),(59,'¿Se conduce con igual corrección en su casa que cuando está de visita?'),(60,'¿Le gusta hacer nuevas amistades?'),(61,'¿Le deprime o le aburre estar solo?'),(62,'¿Le gusta meterse en asunto que requieren energía y rapidez de acción?'),(63,'¿Piensa con frecuencia en los buenos tiempos pasados?'),(64,'¿Habla a veces de lo que no sabe?'),(65,'¿Cree que es imposible confiar de verdad en nadie?'),(66,'¿Le ocurre a menudo que una idea tonta le venga insistentemente a la imaginación?'),(67,'¿Le considera la gente como una persona animada?'),(68,'¿Sabe aguantar bien a las personas que abusan de su autoridad?'),(69,'¿Sabe aguantar bien a las personas que abusan de su autoridad ?'),(70,'¿Suele tener un humor casi siempre igual?'),(71,'¿Le duele mucho que le traten secamente?'),(72,'¿Se conforma cuando no se sale con la suya?'),(73,'¿Se siente muy herido en sus sentimientos cuando la gente es desconsiderada con  usted?'),(74,'¿Presume a veces más de lo debido?'),(75,'¿Le gusta dirigir grupos, reuniones, etc.?'),(76,'¿Se considera a si mismo una persona alegre y optimista?'),(77,'¿Ha tenido alguna vez apuros económicos?'),(78,'¿Le ha convencido la vida de que para hacerse respetar hay que ser duro?'),(79,'Si alguien se mete con usted, ¿no para hasta darle su merecido?'),(80,'¿Se pone a veces tan nervioso que no puede permanecer sentado?'),(81,'En general ¿Le gustan las fiestas?'),(82,'¿Se considera a usted mismo como una persona animada?'),(83,'¿Está convencido de que en esta vida es necesario ser un poco \"zorro \" con la gente?'),(84,'¿Cree que al que se destaca, en seguida tratan de hundirlo?'),(85,'¿Llega alguna vez tarde a su trabajo?'),(86,'¿Se siente deprimido a veces sin saber exactamente por qué?'),(87,'Cuando hace algo mal ¿Piensa mucho en ello?'),(88,'¿Cambia de humor con facilidad?'),(89,'¿Cree que la vida ha sido justa con usted?'),(90,'¿Le gusta tener muchas relaciones sociales?'),(91,'¿Ha hecho alguna vez algo de lo que tenga que avergonzarse?'),(92,'Sinceramente, ¿se considera capaz de hacer las cosas mejor que la mayoría?'),(93,'¿Cree que la gente habla de usted con frecuencia?'),(94,'¿Ha perdido el control de sus nervios alguna vez?'),(95,'¿Protesta siempre que se comete una injusticia con usted?'),(96,'¿Se siente alegre unas veces, y desgraciado otras, sin que haya razones claras para ello?'),(97,'¿Le resulta difícil participar de la alegría general en las reuniones y fiestas?'),(98,'Por lo general, ¿es usted una persona despreocupada?'),(99,'¿Le cambia fácilmente el humor, según le vayan las cosas?'),(100,'¿Pagaría usted impuestos aún sabiendo que nadie le iba a descubrir si no los pagaba?'),(101,'¿Cree que la vida hay que ajustaría a ideales y normas fijas?'),(102,'¿Le resulta difícil callarse en las discusiones?'),(103,'¿Le gustan los trabajos que requieren mucho cuidado y atención en los detalles?'),(104,'¿Hay ocasiones en que lo único que desea es estar sólo y que lo dejen en paz?'),(105,'¿Cree usted, que en realidad, el mundo está gobernado por poderes secretos que poquísima gente conoce?'),(106,'¿Le gusta permanecer en segundo término en las fiestas y reuniones públicas?'),(107,'¿Cree que un puñado de hombres decididos pueda reformar la sociedad?'),(108,'¿Hay noches en que las preocupaciones le tienen despierto mucho tiempo?'),(109,'¿Reconoce que tiene el genio un poco violento?'),(110,'Entre las personas que conoce, ¿Hay algunas que le sean profundamente antipáticas?'),(111,'¿Le parece que muchas cosas le han salido mal debido a envidias y enemistades?'),(112,'¿Opina que la mujer debe gozar de igual libertad que el hombre?'),(113,'Cuándo algo le sale mal, ¿lo olvida enseguida?'),(114,'Por lo general ¿es usted quien da el primer paso para entablar una nueva amistad?'),(115,'¿Es usted distraído?'),(116,'¿Disfruta en las manifestaciones de entusiasmo colectivo, como fútbol, la feria, etc.?'),(117,'Por lo general ¿mantiene oculto sus propósitos?'),(118,'Cuando no se sale con la suya ¿se conforma fácilmente?'),(119,'¿Se le ha criticado más de lo debido?'),(120,'¿Encuentra que en el mundo actual no se puede fiar uno de nadie?'),(121,'¿Le cuesta mucho olvidar las ofensas, aunque las haya perdonado desde el primer momento?'),(122,'Cuando se le mete algo en la cabeza, ¿no para hasta realizarlo?'),(123,'Por la calle, ¿se fijan en usted las personas de otro sexo?'),(124,'Durante los últimos cinco años ¿ha ocupado algún cargo directivo en juntas deportivas, benéficas, sociales, etc.?'),(125,'¿Cambia de aficiones con facilidad?'),(126,'¿Se le va a veces la imaginación, de modo que pierde el hilo de lo que está haciendo?'),(127,'Cuando está deprimido ¿busca alguien que le anime?'),(128,'¿Hay ocasiones en que se siente solo en medio de la gente?'),(129,'Si llega tarde a una conferencia, ¿prefiere quedarse de pie mejor que atravesar la sola para sentarse?'),(130,'¿Ha recaudado alguna vez fondos para una causa que le interese?'),(131,'¿Le gusta más el cine que el baile?'),(132,'¿Regañaría bruscamente a un subalterno suyo por no haberle tenido un trabajo a tiempo?'),(133,'Cuando se encarga de algo ¿prefiere asumir la responsabilidad usted solo?'),(134,'¿Cree que el respeto a las costumbres sociales constituye un aspecto esencial de la vida humana?'),(135,'¿Suele tomarse más responsabilidades y quehaceres de los que le corresponden?'),(136,'¿Le desagrada la disciplina?'),(137,'¿Pasa a veces por períodos en que se siente muy solo?'),(138,'¿Ha experimentado en la vida muchas amarguras?'),(139,'Por lo general, ¿comprende mejor los problemas estudiándolos usted solo que discutiéndolos con otros?'),(140,'Si un camarero le sirve mal, ¿le llama usted la atención?'),(141,'Si alguien murmura de usted, ¿le aborda abiertamente?'),(142,'¿Le irrita que se hablen ciertos asuntos delante de usted?'),(143,'¿Le molesta que le observen mientras trabaja?'),(144,'¿Le gusta intervenir en la organización de fiestas, reuniones, etc.?'),(145,'¿Ha sentido envidia alguna vez?'),(146,'¿Está convencido de que efectivamente se cumple el dicho \"el que la sigue la mata?'),(147,'¿Se entusiasma fácilmente con ideas o proyectos nuevos?'),(148,'¿Le molesta ver objetos mal colocados, cuadros torcidos, etc. ?'),(149,'¿Se considera usted una persona de mucha fuerza de voluntad?'),(150,'¿Tiende aponerse colorado en las situaciones embarazosas?'),(151,'¿Acostumbra a llevar el reloj un poco adelantado?'),(152,'¿Le molesta llevar flojo el nudo de la corbata?'),(153,'¿Olvida a veces dónde ha dejado las cosas?'),(154,'¿Suele excederse al dar propinas?'),(155,'¿Prefiere una vida tranquila a una vida de éxitos?'),(156,'Después de haber echado una carta ¿duda de si las señas (estampillas, dirección, etc.) irían bien puestas?');
/*!40000 ALTER TABLE `tb_cep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_epq`
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

LOCK TABLES `tb_epq` WRITE;
/*!40000 ALTER TABLE `tb_epq` DISABLE KEYS */;
INSERT INTO `tb_epq` VALUES (1,'¿Tiene Ud. muchos «hobbys», muchas aficiones?','1','E'),(2,'¿Le preocupa tener deudas?','0','P'),(3,'¿Tiene a menudo altibajos su estado de animo?','1','N'),(4,'¿Ha sido alguna vez acaparador, cogiendo más de lo que le correspondia?','1','S'),(5,'¿Es Ud. una persona conversadora?','1','E'),(6,'¿Lo pasaria muy mal si viese sufrir a un niño o a un animal?','0','P'),(7,'¿Se siente alguna vez desgraciado sin  ninguna razón?','1','N'),(8,'¿Es Ud. de los que cierra las puertas de su casa cuidadosamente todas las noches?','0','S'),(9,'¿Tomaría Ud. drogas o medicamentos que pudieran tener efectos desconocidos o peligrosos?','1','P'),(10,'¿Se preocupa Ud. a menudo por cosas que no debería haber hecho o dicho?','1','N'),(11,'¿Ha quitado Ud. algo que no le pertenecía, aunque no fuese más un alfiler o un botón?','1','S'),(12,'¿Es Vd. una persona animada, alegre?','1','E'),(13,'¿Le gusta conocer a gente nueva, hacer amistades?','0','P'),(14,'¿Es Ud. una persona irritable?','1','N'),(15,'Cuando promete hacer algo, ¿cumple su promesa a pesar de los muchos inconvenientes que se puedan presentar?','0','S'),(16,'Normalmente, ¿puede alerjarse y disfrutar en una reunión social animada?','1','E'),(17,'¿Se hieren sus sentimientos con facilidad?','1','N'),(18,'¿Ha roto o perdido Ud. algo que pertenecia a otra persona?','1','S'),(19,'¿Tiene Ud. a mantenerse en segundo plano en las reuniones sociales?','0','E'),(20,'¿Disfruta Ud. hiriendo o mortificando a personas que ama o quiere?','1','P'),(21,'¿Se siente a menudo arto, «hasta la coronilla»?','1','N'),(22,'¿Habla aveces de cosas que Ud. no sabe nada?','1','S'),(23,'¿Le gusta mucho salir?','1','E'),(24,'¿Está Ud. siempre dispuesto a admitir un error cuando lo ha cometido?','0','P'),(25,'¿Le asaltan a menudo sentimientos de culpa?','1','N'),(26,'¿Piensa Ud. que el matrimonio esta pasado de moda y debería suprimirse?','1','S'),(27,'¿Tiene Ud. enemigos que quieren hacerle daño?','1','P'),(28,'¿Se considera Ud. una persona nerviosa?','1','N'),(29,'¿Cree que los sistemas de seguros son una buena idea?','0','S'),(30,'¿Prefiere Ud. leer a conocer gente?','0','E'),(31,'¿Disfruta gastando bromas que aveces pueden herir o molestar a otras personas?','1','P'),(32,'¿Se considera Ud. una persona despreocupada, feliz?','0','N'),(33,'¿Ha dicho Ud. alguna vez algo malo o malintencionado acerca de alguien?','1','S'),(34,'¿Tiene Ud. muchos amigos?','1','E'),(35,'¿Se intereza por el porvenir de su familia?','0','P'),(36,'¿Es Ud. una persona preocupadiza?','1','N'),(37,'Cuando era niño, ¿fue alguna vez descarado con sus padres?','1','S'),(38,'¿Toma Ud. generalmente la iniciativa para hacer nuevos amigos?','1','E'),(39,'¿Sufre Ud. de insomnio?','1','P'),(40,'¿Se preocupa Ud. acerca de las cosas terribles que puedan suceder?','1','N'),(41,'¿Son buenas y convenientes todas sus constumbres?','0','S'),(42,'¿Es Ud. de los que a veces fanfarronean un poco?','1','E'),(43,'¿Le gusta alternar con sus amistades?','0','P'),(44,'¿Se considera Ud. tenso, irritable, «de poco aguante»?','1','N'),(45,'¿Ha hecho alguna vez trampas en el juego?','1','S'),(46,'Si se encuentra un niño perdido entre una muchedumbre de gente, ¿se compadecería de él?','0','P'),(47,'¿Se preocupa Ud. acerca de su salud?','1','N'),(48,'¿Se a aprovechado Ud. alguna vez de otra persona?','1','S'),(49,'¿Permanece Ud. generalmente callado cuando está con otras personas?','0','E'),(50,'¿Le molesta la gente que conduce con cuidado?','1','P'),(51,'¿Duda mucho antes de tomar cualquier decisión, por pequeña que sea?','1','N'),(52,'Cuando era niño, ¿hacía lo que le mandaban inmediatamente y sin protestar?','0','S'),(53,'¿Le resulta fácil animar una reunión social que está resultando aburrida?','1','E'),(54,'¿Para Ud. tienen la mayoria de las cosas el mismo sabor?','1','P'),(55,'¿Se ha sentido a menudo desanimado, cansado, sin ninguna razón?','1','N'),(56,'¿Piensa que la gente pasa demasiado tiempo preocupándose por su futuro con ahorros y seguros?','1','S'),(57,'¿Le gusta contar chistes y anécdotas a sus amigos?','1','E'),(58,'¿Le gusta llegar a tiempo a sus citas?','0','P'),(59,'¿Siente Ud. a menudo que la vida es muy aburrida?','1','N'),(60,'¿Dejaría Ud. de pagar sus impuestos si estuviera seguro de que nunca lo descubrirían?','1','S'),(61,'¿Le gusta mezclarse con la gente?','1','E'),(62,'¿Hay personas que evitan encontrarse con Ud.?','1','P'),(63,'¿Le preocupa mucho su apariencia externa?','1','N'),(64,'¿Le importan mucho los buenos modales y la limpieza?','0','S'),(65,'¿Es o fue su madre una buena mujer?','0','P'),(66,'¿Ha deseado alguna vez morirse?','1','N'),(67,'¿Ha insistido alguna vez en salirse con la suya?','1','S'),(68,'¿Tiene Ud. casi siempre una respuesta rápida, a mano, cuando la gente le habla?','1','E'),(69,'¿Trata Ud. de no ser grosero, mal educado, con la gente?','0','P'),(70,'¿Se queda preocupado demasiado tiempo después de una experiencia embarazosa molesta?','1','N'),(71,'¿Ha llegado Ud. alguna vez tarde a una cita o al trabajo?','1','S'),(72,'¿Le gusta hacer cosas en las que tenga que actuar con rapidez?','1','E'),(73,'Cuando Ud. tiene que abordar el autobús, ¿llega a menudo en el último momento?','1','P'),(74,'¿Sufre Ud. de los «nervios»?','1','N'),(75,'¿Se lava siempre las manos antes de las comidas?','0','S'),(76,'¿Comienza a menudo actividades que le ocupan más tiempo del que realmente dispone?','1','E'),(77,'¿Se rompe fácilmente su amistad con otras personas sin que Vd. tenga la culpa?','1','P'),(78,'¿Se siente a menudo solo?','1','N'),(79,'¿Deja Ud. a veces para mañana lo que puede hacer hoy?','1','S'),(80,'¿Es Ud. capaz de animar, de poner en marcha una reunión social?','1','E'),(81,'¿Le daría pena ver a un animal cogido en una trampa?','0','P'),(82,'¿Se siente fácilmente herido cuando la gente le encuentra fallos a Ud. o a su trabajo?','1','N'),(83,'¿Piensa que tener un seguro de enfermedad es una tontería?','1','S'),(84,'¿Le gusta hacer rabiar algunas veces a los animales?','1','P'),(85,'¿Se encuentra Ud. algunas veces rebosante de energía y otras veces lento y apagado?','1','N'),(86,'¿Practica Ud. siempre lo que predica?','0','S'),(87,'¿Le gusta que haya mucha animación, bullicio, a su alrededor?','1','E'),(88,'¿Le gustaría que otras personas le tuvieran miedo?','1','P'),(89,'¿Es Ud. susceptible o se le molesta fácilmente con ciertas cosas?','1','N'),(90,'¿Respetaría siempre su lugar en una cola, a pesar de todo?','0','S'),(91,'¿Piensan otras personas que Ud. es muy enérgico y animado?','1','E'),(92,'¿Prefiere normalmente salir solo?','1','P'),(93,'¿Le hace perder el apetito cualquier contrariedad, por pequeña que ésta sea?','1','N'),(94,'¿Considera que podría portarse mejor con algunos de sus amigos?','1','S');
/*!40000 ALTER TABLE `tb_epq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_num_prue`
--

DROP TABLE IF EXISTS `tb_num_prue`;
CREATE TABLE `tb_num_prue` (
  `idnum_prue` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`idnum_prue`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_num_prue`
--

LOCK TABLES `tb_num_prue` WRITE;
/*!40000 ALTER TABLE `tb_num_prue` DISABLE KEYS */;
INSERT INTO `tb_num_prue` VALUES (1),(2);
/*!40000 ALTER TABLE `tb_num_prue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_opcotis`
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

LOCK TABLES `tb_opcotis` WRITE;
/*!40000 ALTER TABLE `tb_opcotis` DISABLE KEYS */;
INSERT INTO `tb_opcotis` VALUES (1,'Cosa','Mueble','Arma','Herramienta','Máquina'),(2,'Conseguir','Decaer','Perder','Acceder','Ensayar'),(3,'La manteca','La harina','La leche','El hombre','La cosecha'),(4,'El humo','La motocicleta','Las ruedas','La gasolina','La bocina'),(5,'35','40','42','45','48'),(6,'La pierna','El pulgar','El dedo','El puño','La rodilla'),(7,'Miente','Bromea','Engaña','Se divierte','Se alaba'),(8,'Seria','Ansiosa','Trabajadora','Enérgica','Tímida'),(9,'El dedo','la Aguja','El hilo','La mano','La costura'),(10,'Hermano','Sobrino','Primo','Tío','Nieto'),(11,'6.456','8.968','4.265','5.064','4.108'),(12,'Probable','Seguro','Dudoso','Posible','Diferido'),(13,'Norte','Polo','Ecuador','Sur E.','Oeste'),(14,'Tristeza','Humildad','Pobreza','Variedad','Altanería'),(15,'Pera','Plátano','Naranja','Pelota','Higo'),(16,'Una cosa redonda que hace tic-tac','Un aparato que se coloca en las torres','Un instrumento redondo con una cadena','Un instrumento que mide el tiempo','Una cosa redonda que tiene aguja y un cristal'),(17,'7','4','11','3','10'),(18,'A la carrera','Al caballo','Al tranvía','Al tren','A la bicicleta'),(19,'Con el fin que los transeúntes o peatones sepan en donde están','Para que se puedan ver bien los articulos expuestos y la gente sienta deseo','Porque los comercios pagan muy barata la corriente eléctrica','Para aumentar la iluminación de la calle','Porque la alcaldía les obliga'),(20,'Manzana','Árbol','Ciruela','Jugo','Cáscara'),(21,'La J','La G','La M','La L','La N'),(22,'La presidencia del consejo de Ministros','El senado','La República','Un monárquico','Un republicano'),(23,'La almohada','El conejo','El pájaro','La cabra','La cama'),(24,'Un animal terrestre','Un ser que tiene cuatro patas y una cola','Un animal pequeño y avispado','Un carnero joven','Un animalito que come hierba'),(25,'Suave','Pequeño','Macizo','Gris','Ruido'),(26,'Muy bueno','Mediano','Malo','Nulo','Superior'),(27,'Billete','Hueso','Cuerda','Lápiz','Llave'),(28,'Rabia','Piedad','Desprecio','Desdén','Añoranza'),(29,'Exploración','Adaptación','Renovación','Novedad','Invención'),(30,'Vuelo','Miel','Alas','Cera','Aguijón'),(31,'7','6','5','8','9'),(32,'Los caballos son cada día más escasos','Los caballos se desbocan fácilmente','Los autos nos hacen ganar tiempo','Los autos son más económicos que los carros','Las reparaciones de los autos son más baratas que el mantenimiento de los caballos'),(33,'La manzana','El huevo','El jugo','El melocotón','La gallina'),(34,'Juez','Albergue','Doctor','Cártel','Sentencia'),(35,'Las S','La N','La O','La D','La C'),(36,'10','5','8','3','25'),(37,'Se va','Decrece','Se agota','Muere','Desaparece'),(38,'Hay oro que no brilla','No hay que dejarse llevar por las apariencias','El diamante es más brillante que el oro','No hay que llevar fantasía que imite oro','Hay gente a quienes les gusta ostentar sus riquezas'),(39,'La D','La K','La M','La S','La A'),(40,'Es preferible poseer una pequeña cosa que esperar una grande','El corazón fuerte no se deja rendir por los elogios','Ningún hombre suele apartarse de la verdad sin engañarse a sí mismo','El que está en todas partes no está en ninguna','Cuando se tiene una cosa hay que procurar conservarla'),(41,'Retoño','Hoja','Árbol','Rama','Tronco'),(42,'La D','La Q','La A','La C','La Y'),(43,'Mayor','Más pequeño','Iguales','No se puede saber','---'),(44,'Raspador','Queso','Gruta','Noche','Pintura'),(45,'La G','La T','La S','La C','La R'),(46,'Resuélvete a hacer lo que debes y haz sin falta lo que hayas resuelto','Hay que ganarse la vida a fuerza de amor','No se deben menospreciar las cosas pequeñas','En casa pobre no es necesario granero','Las personas deben ayudarse unas a otras'),(47,'Carlos es mayor que Juan','Juan y Carlos tienen la misma edad','Carlos es más joven que Juan','Juan es menor que Carlos','José es el menor de los tres'),(48,'La T','La P','La D','La B','La S'),(49,'10','12','13','15','8'),(50,'Un error','Una afirmación voluntariamente falsa','Una afirmación involuntariamente falsa','Una exageración','Una respuesta inexacta'),(51,'La M','La Y','La S','La G','La P'),(52,'Permanente','Firme','Estacionaria','Sólida','Verdadera'),(53,'Andrés es mayor que Luis','Pablo es el más joven','Andrés y Luis tienen la misma edad','El mayor de todos es Luis','Pablo es mayor que Andrés'),(54,'Árbol','Muñeco','Carnero','Pluma','Piel'),(55,'El hierro batido en frió, es malo','No se pueden hacer varias cosas al mismo tiempo','Hay que saber aprovechar el momento oportuno','Los herreros han de trabajar siempre de prisa','El trabajo del hierro es cansado'),(56,'La S','La M','La H','La D','La A'),(57,'El estado','El departamento','La ciudad','El patrono','El juez'),(58,'1','2','3','6','5'),(59,'Promesa','Debate','Amnistía','Proceso','Convenio'),(60,'La E','La F','La El','La Es','La D'),(61,'2','3','4','5','6'),(62,'Un tubo de cristal graduado que contiene mercurio','Un instrumento para medir la fiebre','Un aparato muy sensible al calor','Un instrumento para medir la temperatura','Un objeto que utilizan los médicos'),(63,'Bravo','Busto','Brocha','Bujía','Breve'),(64,'10','14','16','24','6'),(65,'Banal','Vivo','Difícil','Raro','Interesante'),(66,'Navío','Ejercito','Rey','República','Soldado'),(67,'La A','La V','La H','La B','La N'),(68,'Un animal que tiene cola','Un ser viviente','Una cosa que trabaja','Un animal que transporta al jinete','Un rumiante'),(69,'La K','La P','La B','La O','La Y'),(70,'La A','La M','La Q','La D','La L'),(71,'Juez','Nervio','Hora','Norte','Labio'),(72,'La A','La E','La L','La R','La B'),(73,'4','17','20','15','16'),(74,'10','5','2','4','25'),(75,'3','4','1','7','8');
/*!40000 ALTER TABLE `tb_opcotis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_otis`
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

LOCK TABLES `tb_otis` WRITE;
/*!40000 ALTER TABLE `tb_otis` DISABLE KEYS */;
INSERT INTO `tb_otis` VALUES (1,'¿Qué expresa mejor lo que es un martillo?','D'),(2,'¿Cuál de estas cinco palabras significa lo contrario de GANAR?','C'),(3,'La hierba es para la vaca lo que el pan es para...','D'),(4,'¿Qué es para el automóvil lo que el carbón es para la locomotora?','D'),(5,'Los números que vienen aquí debajo forma una serie y uno de ellos no es correcto ¿Qué número deberia estar en su lugar? \r\n 5 10 15 20 25 30 35 39 45 50','B'),(6,'La mano es para el brazo lo que el pié es para...','A'),(7,'De un muchacho que no hace más que hablar de sus cualidades y de su sabiduría, se dice que...','E'),(8,'De una persona que tiene deseos de hacer una cosa pero teme el fracaso, se dice que es...','E'),(9,'El sombrero es para la cabeza lo que el dedal es para...','A'),(10,'El hijo de la hermana de mi padre es mi...','C'),(11,'¿Cuál de estas cantidades es la mayor?','B'),(12,'Cuado sabemos que un acontecimiento va a pasar sin ninguna clase de dudas, decimos que es...','B'),(13,'¿Qué palabra indica el lado opuesto a ESTE?','E'),(14,'¿Qué palabra indica lo contrario a SOBERBIA?','B'),(15,'¿cuál de estas cinco cosas no debería agruparse a las demás?','D'),(16,'¿Qué definición de éstas expresa más exactamente lo que es un reloj?','D'),(17,'Si una persona, al salir de su casa, anda siete pasos hacia la derecha y después retrocede cuatro hacia la izquierda,¿A cuántos pasos esta de su casa?','D'),(18,'Si comparamos el automóvil a una carreta, ¿a que deberíamos comparar una motocicleta?','E'),(19,'¿Cuál es la razón por la cual las fachadas de los comercios están muy iluminadas?','B'),(20,'¿Cuál de estas cinco cosas tiene más parecido con manzana, melocotón y pera?','C'),(21,'En el abecedario, ¿Qué letra sigue a la K?','D'),(22,'El rey es a la monarquía lo que el presidente es a...','C'),(23,'La lana es para el carnero lo que las plumas son para','C'),(24,'¿Cuál de estas definiciones expresa más exactamente lo que es un cordero?','D'),(25,'Pesado es a plomo lo que sonoro es a...','E'),(26,'Mejor es a bueno lo que peor es a...','C'),(27,'¿Cuál de estas cosas tiene más parecido con tenazas, alambre y clavo?','E'),(28,'Ante el dolor de los demás normalmente sentimos...','B'),(29,'Cuando alguien concibe una nueva máquina, se dice que ha hecho una...','E'),(30,'¿Qué es para la abeja lo que las uñas son para el gato?','E'),(31,'Uno de los números de esta serie está equivocado.  ¿Qué número debería figurar en su lugar? \r\n 1  7  2  7  3  7  4  7  5  7  6  7  8  7','A'),(32,'¿Cuál es la principal razón por la que vemos cada día sustituir los caballos por los automóviles?','C'),(33,'La corteza es para la naranja y la vaina es para el frijol lo que la cáscara es para...','B'),(34,'¿Qué es para el criminal lo que el hospital es para el enfermo?','D'),(35,'Si estos números estuviesen ordenados, ¿Con qué letra empezaría el del centro? \r\n Ocho Diez Seis Nueve Siete','C'),(36,'A 30 centavos la cartulina, ¿Cuántas podrán comprarse por 3 dólares?','A'),(37,'De una cantidad que disminuye se dice que...','B'),(38,'Hay un refrán que dice &#34;No todo lo que brilla es oro&#34; y esto significa...','B'),(39,'En una lengua extranjera KOLO quiere decir \"niño\" y DAAK KOLO \"niño bueno\". ¿Por qué letra empieza la palabra que significa \"bueno\" en ese idioma?','A'),(40,'Este refrán, \"Más vale pájaro en mano que cien volando\", quiere decir:','A'),(41,'¿Cuál de estas cinco cosas es más completa?','C'),(42,'Si estas palabras estuviesen convenientemente ordenadas para formar una frase, ¿Porqué letra empezaría la tercera palabra?\n CON DIME ERES QUIEN DIRÉ ANDAS Y TE QUIEN','B'),(43,'Si Jorge   es   mayor   que   Pedro,   y   Pedro es mayor que Juan,   entonces Jorge es __________ que Juan.','A'),(44,'¿Cuál de estas palabras es la primera que aparece en un diccionario?','C'),(45,'Si las palabras General, Teniente, Soldado, Coronel y Recluta estuviesen colocadas indicando el orden jerárquico que significan, ¿Con cuál letra empezaría la del centro?','B'),(46,'Hay un refrán que dice: \"Un grano no hace granero, pero ayuda al compañero\", y esto significa:','C'),(47,'Si Juan es mayor que José, y José tiene la misma edad que Carlos, entonces...','C'),(48,'Ordenando la frase que viene aquí debajo, ¿Con cuál letra empezaría la última palabra? A FALTA TORTILLAS BUENAS PAN SON DE','A'),(49,'Si en una caja grande hubieran dos más pequeñas y dentro de cada una de éstas dos hubieran cinco ¿Cuántas habría en total?','C'),(50,'¿Qué indica mejor lo que es una mentira?','B'),(51,'En un idioma extranjero SOTO GRON quiere decir \"muy caliente\" y PASS GRON \"muy frió\", ¿Por qué letra empieza la palabra que significa \"muy\" en ese idioma?','D'),(52,'La palabra que mejor expresa que una cosa o institución se mantiene a lo largo del tiempo es ...','A'),(53,'Si Pablo es mayor que Luis y si Pablo es más joven que Andrés, entonces...','A'),(54,'¿Cuál de estas cosas tiene más parecido con serpiente, vaca y gorrión?','C'),(55,'Hay refrán que dice: \"A hierro caliente, batir de repente\", y esto significa:','C'),(56,'Si las palabras que vienen aquí debajo estuviesen ordenadas, ¿Con cuál letra empezaría la del centro? Semana Año Hora Segundo Día Mes Minuto','D'),(57,'El capitán es para el barco lo que el alcalde es para ...','C'),(58,'Uno de los números de la serie que viene aquí debajo está equivocado. ¿Qué número debiera estar en su lugar? \n 2   3   4   3   2   3   4   3   2   4','C'),(59,'Si un pleito se resuelve por mutuas concesiones, se dice que ha habido...','E'),(60,'La oración que viene aquí debajo tiene las palabras desordenadas. ¿Qué letra debe marcarse atendiendo a la frase ordenada? FRASE LA LETRA SEÑALE PRIMERA ESTA DE','D'),(61,'En la serie de números, que aparece aquí debajo, cuente todos los 5 que están delante de un 7. ¿Cuántos son? \r\n 7  5  3  5  7  2  3  7  5  6  7  7  2  5  7  3  4  7  7  5  2  0  7  5  7  8  3  7  2  5  1  7  9  6  5  7','C'),(62,'¿Qué indica mejor lo que es un termómetro?','D'),(63,'¿Cuál de estas palabras es la primera que aparece en un diccionario?','A'),(64,'Uno de los números de la serie que aparece aquí debajo está equivocado, ¿Qué número debiera estar en su lugar? \r\n 1     2    4    8    12    32    64','C'),(65,'¿Cuál de estas palabras significa lo contrario de COMÚN?','D'),(66,'¿Cuál de estas cinco cosas tiene más parecido con Presidente, Almirante y General?','C'),(67,'Si las palabras que aparecen aquí debajo estuvieran ordenadas, ¿Con que letra empezaría la del centro? Adolescente Niño Hombre Viejo Bebe','A'),(68,'¿Cuál de estas definiciones indica más exactamente lo que es un caballo?','D'),(69,'En un idioma extranjero BECO FRAC quiere decir \"un poco pan\", KLUP FRAC \"un poco de leche\" y BECO OTOH KLUP FRAC \"un poco de pan y de leche\". ¿Con que letra empieza la palabra que significa Y en dicho idioma?','D'),(70,'Si las palabras que aparecen aquí debajo estuviesen convenientemente ordenadas para ordenar una frase, ¿Con que letra empezaría la tercera palabra? MADRUGA QUIEN LE DIOS A AYUDA','B'),(71,'¿Cuál de estas palabras es la última que aparece en un diccionario?','D'),(72,'Si se ordena la frase que aparece aquí debajo, ¿Que letra cumple lo que se dice en ella? EN LETRA RECUADRO A ESCRIBA LA EL','A'),(73,'Uno de los números de la serie que aparece aquí debajo está equivocado, ¿Qué número debiera estar en su lugar? \n 1 2 5 6 9 10 13 14 16 18','B'),(74,'Si un ciclista recorre 250 metros en 25 segundos, ¿Cuántos metros recorrerá en un quinto de segundo?','C'),(75,'Si la frase que aparece aquí debajo estuviera ordenada, ¿Que número cumple lo que en ella se dice? Y SUMA CUATRO ESCRIBA TRES LA UNO DE','E');
/*!40000 ALTER TABLE `tb_otis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_profesorados`
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

LOCK TABLES `tb_profesorados` WRITE;
/*!40000 ALTER TABLE `tb_profesorados` DISABLE KEYS */;
INSERT INTO `tb_profesorados` VALUES ('P70402','Educación Básica para Primero y Segundo Ciclos'),('P70921','Ciencias Naturales Tercer Ciclo y Bachillerato'),('P70923','Matemática para Tercer Ciclo y Educación Media');
/*!40000 ALTER TABLE `tb_profesorados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_raven`
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

LOCK TABLES `tb_raven` WRITE;
/*!40000 ALTER TABLE `tb_raven` DISABLE KEYS */;
INSERT INTO `tb_raven` VALUES (1,'A1','4'),(2,'A2','5'),(3,'A3','1'),(4,'A4','2'),(5,'A5','6'),(6,'A6','3'),(7,'A7','6'),(8,'A8','2'),(9,'A9','1'),(10,'A10','3'),(11,'A11','4'),(12,'A12','5'),(13,'B1','2'),(14,'B2','6'),(15,'B3','1'),(16,'B4','2'),(17,'B5','1'),(18,'B6','3'),(19,'B7','5'),(20,'B8','6'),(21,'B9','4'),(22,'B10','3'),(23,'B11','4'),(24,'B12','5'),(25,'C1','8'),(26,'C2','2'),(27,'C3','3'),(28,'C4','8'),(29,'C5','7'),(30,'C6','4'),(31,'C7','5'),(32,'C8','1'),(33,'C9','7'),(34,'C10','6'),(35,'C11','1'),(36,'C12','2'),(37,'D1','3'),(38,'D2','4'),(39,'D3','3'),(40,'D4','7'),(41,'D5','8'),(42,'D6','6'),(43,'D7','5'),(44,'D8','4'),(45,'D9','1'),(46,'D10','2'),(47,'D11','5'),(48,'D12','6'),(49,'E1','7'),(50,'E2','6'),(51,'E3','8'),(52,'E4','2'),(53,'E5','1'),(54,'E6','5'),(55,'E7','1'),(56,'E8','6'),(57,'E9','3'),(58,'E10','2'),(59,'E11','4'),(60,'E12','5');
/*!40000 ALTER TABLE `tb_raven` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respcep`
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

LOCK TABLES `tb_respcep` WRITE;
/*!40000 ALTER TABLE `tb_respcep` DISABLE KEYS */;
INSERT INTO `tb_respcep` VALUES (1,'0001',1,'0'),(1,'0002',1,'1'),(2,'0001',1,'0'),(2,'0002',1,'0'),(3,'0001',1,'0'),(3,'0002',1,'0'),(4,'0001',1,'0'),(4,'0002',1,'0'),(5,'0001',1,'0'),(5,'0002',1,'0'),(6,'0001',1,'0'),(6,'0002',1,'0'),(7,'0001',1,'0'),(7,'0002',1,'0'),(8,'0001',1,'0'),(8,'0002',1,'0'),(9,'0001',1,'0'),(9,'0002',1,'0'),(10,'0001',1,'0'),(10,'0002',1,'0'),(11,'0001',1,'0'),(11,'0002',1,'0'),(12,'0001',1,'0'),(12,'0002',1,'0'),(13,'0001',1,'0'),(13,'0002',1,'0'),(14,'0001',1,'0'),(14,'0002',1,'0'),(15,'0001',1,'0'),(15,'0002',1,'0'),(16,'0001',1,'0'),(16,'0002',1,'0'),(17,'0001',1,'0'),(17,'0002',1,'0'),(18,'0001',1,'0'),(18,'0002',1,'0'),(19,'0001',1,'0'),(19,'0002',1,'0'),(20,'0001',1,'0'),(20,'0002',1,'0'),(21,'0001',1,'0'),(21,'0002',1,'0'),(22,'0001',1,'0'),(22,'0002',1,'0'),(23,'0001',1,'0'),(23,'0002',1,'0'),(24,'0001',1,'0'),(24,'0002',1,'0'),(25,'0001',1,'0'),(25,'0002',1,'0'),(26,'0001',1,'0'),(26,'0002',1,'0'),(27,'0001',1,'0'),(27,'0002',1,'0'),(28,'0001',1,'0'),(28,'0002',1,'0'),(29,'0001',1,'0'),(29,'0002',1,'0'),(30,'0001',1,'0'),(30,'0002',1,'0'),(31,'0001',1,'0'),(31,'0002',1,'0'),(32,'0001',1,'0'),(32,'0002',1,'0'),(33,'0001',1,'0'),(33,'0002',1,'0'),(34,'0001',1,'0'),(34,'0002',1,'0'),(35,'0001',1,'0'),(35,'0002',1,'0'),(36,'0001',1,'0'),(36,'0002',1,'0'),(37,'0001',1,'0'),(37,'0002',1,'0'),(38,'0001',1,'0'),(38,'0002',1,'0'),(39,'0001',1,'0'),(39,'0002',1,'0'),(40,'0001',1,'0'),(40,'0002',1,'0'),(41,'0001',1,'0'),(41,'0002',1,'0'),(42,'0001',1,'0'),(42,'0002',1,'0'),(43,'0001',1,'0'),(43,'0002',1,'0'),(44,'0001',1,'0'),(44,'0002',1,'0'),(45,'0001',1,'0'),(45,'0002',1,'0'),(46,'0001',1,'0'),(46,'0002',1,'0'),(47,'0001',1,'0'),(47,'0002',1,'0'),(48,'0001',1,'0'),(48,'0002',1,'0'),(49,'0001',1,'0'),(49,'0002',1,'0'),(50,'0001',1,'0'),(50,'0002',1,'3'),(51,'0001',1,'0'),(51,'0002',1,'1'),(52,'0001',1,'0'),(52,'0002',1,'0'),(53,'0001',1,'0'),(53,'0002',1,'0'),(54,'0001',1,'0'),(54,'0002',1,'0'),(55,'0001',1,'0'),(55,'0002',1,'0'),(56,'0001',1,'0'),(56,'0002',1,'0'),(57,'0001',1,'0'),(57,'0002',1,'0'),(58,'0001',1,'0'),(58,'0002',1,'0'),(59,'0001',1,'0'),(59,'0002',1,'0'),(60,'0001',1,'0'),(60,'0002',1,'0'),(61,'0001',1,'0'),(61,'0002',1,'0'),(62,'0001',1,'0'),(62,'0002',1,'0'),(63,'0001',1,'0'),(63,'0002',1,'0'),(64,'0001',1,'0'),(64,'0002',1,'0'),(65,'0001',1,'0'),(65,'0002',1,'0'),(66,'0001',1,'0'),(66,'0002',1,'0'),(67,'0001',1,'0'),(67,'0002',1,'0'),(68,'0001',1,'0'),(68,'0002',1,'0'),(69,'0001',1,'0'),(69,'0002',1,'0'),(70,'0001',1,'0'),(70,'0002',1,'0'),(71,'0001',1,'0'),(71,'0002',1,'0'),(72,'0001',1,'0'),(72,'0002',1,'0'),(73,'0001',1,'0'),(73,'0002',1,'0'),(74,'0001',1,'0'),(74,'0002',1,'0'),(75,'0001',1,'0'),(75,'0002',1,'0'),(76,'0001',1,'0'),(76,'0002',1,'0'),(77,'0001',1,'0'),(77,'0002',1,'0'),(78,'0001',1,'0'),(78,'0002',1,'0'),(79,'0001',1,'0'),(79,'0002',1,'0'),(80,'0001',1,'0'),(80,'0002',1,'0'),(81,'0001',1,'0'),(81,'0002',1,'0'),(82,'0001',1,'0'),(82,'0002',1,'0'),(83,'0001',1,'0'),(83,'0002',1,'0'),(84,'0001',1,'0'),(84,'0002',1,'0'),(85,'0001',1,'0'),(85,'0002',1,'0'),(86,'0001',1,'0'),(86,'0002',1,'0'),(87,'0001',1,'0'),(87,'0002',1,'0'),(88,'0001',1,'0'),(88,'0002',1,'0'),(89,'0001',1,'0'),(89,'0002',1,'0'),(90,'0001',1,'0'),(90,'0002',1,'0'),(91,'0001',1,'0'),(91,'0002',1,'0'),(92,'0001',1,'0'),(92,'0002',1,'0'),(93,'0001',1,'0'),(93,'0002',1,'0'),(94,'0001',1,'0'),(94,'0002',1,'0'),(95,'0001',1,'0'),(95,'0002',1,'0'),(96,'0001',1,'0'),(96,'0002',1,'0'),(97,'0001',1,'0'),(97,'0002',1,'0'),(98,'0001',1,'0'),(98,'0002',1,'0'),(99,'0001',1,'0'),(99,'0002',1,'0'),(100,'0001',1,'0'),(100,'0002',1,'3'),(101,'0001',1,'0'),(101,'0002',1,'1'),(102,'0001',1,'0'),(102,'0002',1,'0'),(103,'0001',1,'0'),(103,'0002',1,'0'),(104,'0001',1,'0'),(104,'0002',1,'0'),(105,'0001',1,'0'),(105,'0002',1,'0'),(106,'0001',1,'0'),(106,'0002',1,'0'),(107,'0001',1,'0'),(107,'0002',1,'0'),(108,'0001',1,'0'),(108,'0002',1,'0'),(109,'0001',1,'0'),(109,'0002',1,'0'),(110,'0001',1,'0'),(110,'0002',1,'0'),(111,'0001',1,'0'),(111,'0002',1,'0'),(112,'0001',1,'0'),(112,'0002',1,'0'),(113,'0001',1,'0'),(113,'0002',1,'0'),(114,'0001',1,'0'),(114,'0002',1,'0'),(115,'0001',1,'0'),(115,'0002',1,'0'),(116,'0001',1,'0'),(116,'0002',1,'0'),(117,'0001',1,'0'),(117,'0002',1,'0'),(118,'0001',1,'0'),(118,'0002',1,'0'),(119,'0001',1,'0'),(119,'0002',1,'0'),(120,'0001',1,'0'),(120,'0002',1,'0'),(121,'0001',1,'0'),(121,'0002',1,'0'),(122,'0001',1,'0'),(122,'0002',1,'0'),(123,'0001',1,'0'),(123,'0002',1,'0'),(124,'0001',1,'0'),(124,'0002',1,'0'),(125,'0001',1,'0'),(125,'0002',1,'0'),(126,'0001',1,'0'),(126,'0002',1,'0'),(127,'0001',1,'0'),(127,'0002',1,'0'),(128,'0001',1,'0'),(128,'0002',1,'0'),(129,'0001',1,'0'),(129,'0002',1,'0'),(130,'0001',1,'0'),(130,'0002',1,'0'),(131,'0001',1,'0'),(131,'0002',1,'0'),(132,'0001',1,'0'),(132,'0002',1,'0'),(133,'0001',1,'0'),(133,'0002',1,'0'),(134,'0001',1,'0'),(134,'0002',1,'0'),(135,'0001',1,'0'),(135,'0002',1,'0'),(136,'0001',1,'0'),(136,'0002',1,'0'),(137,'0001',1,'0'),(137,'0002',1,'0'),(138,'0001',1,'0'),(138,'0002',1,'0'),(139,'0001',1,'0'),(139,'0002',1,'0'),(140,'0001',1,'0'),(140,'0002',1,'0'),(141,'0001',1,'0'),(141,'0002',1,'0'),(142,'0001',1,'0'),(142,'0002',1,'0'),(143,'0001',1,'0'),(143,'0002',1,'0'),(144,'0001',1,'0'),(144,'0002',1,'0'),(145,'0001',1,'0'),(145,'0002',1,'0'),(146,'0001',1,'0'),(146,'0002',1,'0'),(147,'0001',1,'0'),(147,'0002',1,'0'),(148,'0001',1,'0'),(148,'0002',1,'0'),(149,'0001',1,'0'),(149,'0002',1,'0'),(150,'0001',1,'0'),(150,'0002',1,'0'),(151,'0001',1,'0'),(151,'0002',1,'0'),(152,'0001',1,'0'),(152,'0002',1,'0'),(153,'0001',1,'0'),(153,'0002',1,'0'),(154,'0001',1,'0'),(154,'0002',1,'0'),(155,'0001',1,'0'),(155,'0002',1,'0'),(156,'0001',1,'0'),(156,'0002',1,'3');
/*!40000 ALTER TABLE `tb_respcep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respcepcorrectas`
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

LOCK TABLES `tb_respcepcorrectas` WRITE;
/*!40000 ALTER TABLE `tb_respcepcorrectas` DISABLE KEYS */;
INSERT INTO `tb_respcepcorrectas` VALUES (7,'1','C'),(12,'3','C'),(18,'3','C'),(23,'3','C'),(24,'2','C'),(27,'3','C'),(30,'3','C'),(31,'3','C'),(36,'3','C'),(39,'2','C'),(40,'3','C'),(44,'3','C'),(48,'3','C'),(49,'3','C'),(52,'3','C'),(55,'3','C'),(61,'3','C'),(63,'3','C'),(66,'3','C'),(70,'1','C'),(72,'2','C'),(76,'2','C'),(80,'3','C'),(86,'3','C'),(88,'3','C'),(96,'3','C'),(99,'3','C'),(101,'1','C'),(104,'3','C'),(108,'3','C'),(119,'2','C'),(122,'2','C'),(126,'3','C'),(10,'1','S'),(14,'3','S'),(17,'1','S'),(22,'1','S'),(29,'1','S'),(33,'1','S'),(42,'3','S'),(46,'1','S'),(50,'1','S'),(56,'3','S'),(59,'3','S'),(64,'1','S'),(69,'1','S'),(74,'1','S'),(77,'1','S'),(85,'1','S'),(91,'1','S'),(100,'3','S'),(110,'1','S'),(1,'2','E'),(2,'1','E'),(3,'1','E'),(7,'1','E'),(9,'3','E'),(11,'1','E'),(13,'2','E'),(15,'3','E'),(20,'3','E'),(21,'3','E'),(24,'2','E'),(25,'1','E'),(28,'1','E'),(32,'3','E'),(35,'1','E'),(37,'3','E'),(39,'3','E'),(43,'1','E'),(47,'1','E'),(48,'3','E'),(51,'3','E'),(57,'1','E'),(58,'1','E'),(60,'1','E'),(61,'1','E'),(62,'2','E'),(63,'3','E'),(67,'1','E'),(75,'1','E'),(76,'1','E'),(81,'1','E'),(82,'1','E'),(87,'3','E'),(90,'1','E'),(92,'2','E'),(97,'3','E'),(98,'1','E'),(101,'3','E'),(103,'2','E'),(106,'3','E'),(113,'1','E'),(114,'1','E'),(116,'1','E'),(124,'1','E'),(125,'1','E'),(6,'3','P'),(8,'1','P'),(15,'1','P'),(16,'1','P'),(19,'1','P'),(23,'1','P'),(26,'1','P'),(34,'1','P'),(36,'1','P'),(38,'1','P'),(41,'1','P'),(45,'1','P'),(53,'1','P'),(54,'1','P'),(55,'1','P'),(65,'1','P'),(68,'3','P'),(70,'1','P'),(72,'3','P'),(73,'1','P'),(78,'1','P'),(79,'1','P'),(83,'1','P'),(84,'1','P'),(89,'3','P'),(92,'1','P'),(93,'1','P'),(95,'1','P'),(102,'1','P'),(105,'1','P'),(107,'1','P'),(109,'1','P'),(111,'1','P'),(112,'3','P'),(113,'3','P'),(115,'3','P'),(117,'1','P'),(118,'3','P'),(119,'1','P'),(120,'1','P'),(121,'1','P'),(122,'1','P'),(123,'1','P'),(4,'2','?'),(5,'2','?'),(71,'2','?'),(94,'2','?'),(127,'2','?'),(128,'2','?'),(129,'2','?'),(130,'2','?'),(131,'2','?'),(132,'2','?'),(133,'2','?'),(134,'2','?'),(135,'2','?'),(136,'2','?'),(137,'2','?'),(138,'2','?'),(139,'2','?'),(140,'2','?'),(141,'2','?'),(142,'2','?'),(143,'2','?'),(144,'2','?'),(145,'2','?'),(146,'2','?'),(147,'2','?'),(148,'2','?'),(149,'2','?'),(150,'2','?'),(151,'2','?'),(152,'2','?'),(153,'2','?'),(154,'2','?'),(155,'2','?'),(156,'2','?'),(1,'3','E'),(13,'3','E'),(24,'3','E'),(57,'2','E'),(58,'2','E'),(98,'2','E'),(103,'3','E');
/*!40000 ALTER TABLE `tb_respcepcorrectas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respepq`
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

LOCK TABLES `tb_respepq` WRITE;
/*!40000 ALTER TABLE `tb_respepq` DISABLE KEYS */;
INSERT INTO `tb_respepq` VALUES (1,'0004',1,'3'),(2,'0004',1,'3'),(3,'0004',1,'3'),(4,'0004',1,'3'),(5,'0004',1,'3'),(6,'0004',1,'3'),(7,'0004',1,'3'),(8,'0004',1,'3'),(9,'0004',1,'3'),(10,'0004',1,'3'),(11,'0004',1,'3'),(12,'0004',1,'3'),(13,'0004',1,'3'),(14,'0004',1,'3'),(15,'0004',1,'3'),(16,'0004',1,'3'),(17,'0004',1,'3'),(18,'0004',1,'3'),(19,'0004',1,'3'),(20,'0004',1,'3'),(21,'0004',1,'3'),(22,'0004',1,'3'),(23,'0004',1,'3'),(24,'0004',1,'3'),(25,'0004',1,'3'),(26,'0004',1,'3'),(27,'0004',1,'3'),(28,'0004',1,'3'),(29,'0004',1,'3'),(30,'0004',1,'3'),(31,'0004',1,'3'),(32,'0004',1,'3'),(33,'0004',1,'3'),(34,'0004',1,'3'),(35,'0004',1,'3'),(36,'0004',1,'3'),(37,'0004',1,'3'),(38,'0004',1,'3'),(39,'0004',1,'3'),(40,'0004',1,'3'),(41,'0004',1,'3'),(42,'0004',1,'3'),(43,'0004',1,'3'),(44,'0004',1,'3'),(45,'0004',1,'3'),(46,'0004',1,'3'),(47,'0004',1,'3'),(48,'0004',1,'3'),(49,'0004',1,'3'),(50,'0004',1,'3'),(51,'0004',1,'3'),(52,'0004',1,'3'),(53,'0004',1,'3'),(54,'0004',1,'3'),(55,'0004',1,'3'),(56,'0004',1,'3'),(57,'0004',1,'3'),(58,'0004',1,'3'),(59,'0004',1,'3'),(60,'0004',1,'3'),(61,'0004',1,'3'),(62,'0004',1,'3'),(63,'0004',1,'3'),(64,'0004',1,'3'),(65,'0004',1,'3'),(66,'0004',1,'3'),(67,'0004',1,'3'),(68,'0004',1,'3'),(69,'0004',1,'3'),(70,'0004',1,'3'),(71,'0004',1,'3'),(72,'0004',1,'3'),(73,'0004',1,'3'),(74,'0004',1,'3'),(75,'0004',1,'3'),(76,'0004',1,'3'),(77,'0004',1,'3'),(78,'0004',1,'3'),(79,'0004',1,'3'),(80,'0004',1,'3'),(81,'0004',1,'3'),(82,'0004',1,'3'),(83,'0004',1,'3'),(84,'0004',1,'3'),(85,'0004',1,'3'),(86,'0004',1,'3'),(87,'0004',1,'3'),(88,'0004',1,'3'),(89,'0004',1,'3'),(90,'0004',1,'3'),(91,'0004',1,'3'),(92,'0004',1,'3'),(93,'0004',1,'3'),(94,'0004',1,'3');
/*!40000 ALTER TABLE `tb_respepq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respotis`
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

LOCK TABLES `tb_respotis` WRITE;
/*!40000 ALTER TABLE `tb_respotis` DISABLE KEYS */;
INSERT INTO `tb_respotis` VALUES (1,'0004',1,'x'),(2,'0004',1,'x'),(3,'0004',1,'x'),(4,'0004',1,'x'),(5,'0004',1,'x'),(6,'0004',1,'x'),(7,'0004',1,'x'),(8,'0004',1,'x'),(9,'0004',1,'x'),(10,'0004',1,'x'),(11,'0004',1,'x'),(12,'0004',1,'x'),(13,'0004',1,'x'),(14,'0004',1,'x'),(15,'0004',1,'x'),(16,'0004',1,'x'),(17,'0004',1,'x'),(18,'0004',1,'x'),(19,'0004',1,'x'),(20,'0004',1,'x'),(21,'0004',1,'x'),(22,'0004',1,'x'),(23,'0004',1,'x'),(24,'0004',1,'x'),(25,'0004',1,'x'),(26,'0004',1,'x'),(27,'0004',1,'x'),(28,'0004',1,'x'),(29,'0004',1,'x'),(30,'0004',1,'x'),(31,'0004',1,'x'),(32,'0004',1,'x'),(33,'0004',1,'x'),(34,'0004',1,'x'),(35,'0004',1,'x'),(36,'0004',1,'x'),(37,'0004',1,'x'),(38,'0004',1,'x'),(39,'0004',1,'x'),(40,'0004',1,'x'),(41,'0004',1,'x'),(42,'0004',1,'x'),(43,'0004',1,'x'),(44,'0004',1,'x'),(45,'0004',1,'x'),(46,'0004',1,'x'),(47,'0004',1,'x'),(48,'0004',1,'x'),(49,'0004',1,'x'),(50,'0004',1,'x'),(51,'0004',1,'x'),(52,'0004',1,'x'),(53,'0004',1,'x'),(54,'0004',1,'x'),(55,'0004',1,'x'),(56,'0004',1,'x'),(57,'0004',1,'x'),(58,'0004',1,'x'),(59,'0004',1,'x'),(60,'0004',1,'x'),(61,'0004',1,'x'),(62,'0004',1,'x'),(63,'0004',1,'x'),(64,'0004',1,'x'),(65,'0004',1,'x'),(66,'0004',1,'x'),(67,'0004',1,'x'),(68,'0004',1,'x'),(69,'0004',1,'x'),(70,'0004',1,'x'),(71,'0004',1,'x'),(72,'0004',1,'x'),(73,'0004',1,'x'),(74,'0004',1,'x'),(75,'0004',1,'x');
/*!40000 ALTER TABLE `tb_respotis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respraven`
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

LOCK TABLES `tb_respraven` WRITE;
/*!40000 ALTER TABLE `tb_respraven` DISABLE KEYS */;
INSERT INTO `tb_respraven` VALUES (1,'0001',1,'4'),(1,'0002',1,'1'),(2,'0001',1,'x'),(2,'0002',1,'x'),(3,'0001',1,'x'),(3,'0002',1,'x'),(4,'0001',1,'x'),(4,'0002',1,'x'),(5,'0001',1,'x'),(5,'0002',1,'x'),(6,'0001',1,'x'),(6,'0002',1,'x'),(7,'0001',1,'x'),(7,'0002',1,'x'),(8,'0001',1,'x'),(8,'0002',1,'x'),(9,'0001',1,'x'),(9,'0002',1,'x'),(10,'0001',1,'x'),(10,'0002',1,'x'),(11,'0001',1,'x'),(11,'0002',1,'x'),(12,'0001',1,'x'),(12,'0002',1,'x'),(13,'0001',1,'x'),(13,'0002',1,'x'),(14,'0001',1,'x'),(14,'0002',1,'x'),(15,'0001',1,'x'),(15,'0002',1,'6'),(16,'0001',1,'x'),(16,'0002',1,'1'),(17,'0001',1,'x'),(17,'0002',1,'x'),(18,'0001',1,'x'),(18,'0002',1,'x'),(19,'0001',1,'x'),(19,'0002',1,'x'),(20,'0001',1,'x'),(20,'0002',1,'x'),(21,'0001',1,'x'),(21,'0002',1,'x'),(22,'0001',1,'x'),(22,'0002',1,'x'),(23,'0001',1,'x'),(23,'0002',1,'x'),(24,'0001',1,'x'),(24,'0002',1,'x'),(25,'0001',1,'x'),(25,'0002',1,'x'),(26,'0001',1,'x'),(26,'0002',1,'x'),(27,'0001',1,'x'),(27,'0002',1,'x'),(28,'0001',1,'x'),(28,'0002',1,'x'),(29,'0001',1,'x'),(29,'0002',1,'x'),(30,'0001',1,'4'),(30,'0002',1,'8'),(31,'0001',1,'x'),(31,'0002',1,'1'),(32,'0001',1,'x'),(32,'0002',1,'x'),(33,'0001',1,'x'),(33,'0002',1,'x'),(34,'0001',1,'x'),(34,'0002',1,'x'),(35,'0001',1,'x'),(35,'0002',1,'x'),(36,'0001',1,'x'),(36,'0002',1,'x'),(37,'0001',1,'x'),(37,'0002',1,'x'),(38,'0001',1,'x'),(38,'0002',1,'x'),(39,'0001',1,'x'),(39,'0002',1,'x'),(40,'0001',1,'x'),(40,'0002',1,'x'),(41,'0001',1,'x'),(41,'0002',1,'x'),(42,'0001',1,'x'),(42,'0002',1,'x'),(43,'0001',1,'x'),(43,'0002',1,'x'),(44,'0001',1,'x'),(44,'0002',1,'x'),(45,'0001',1,'x'),(45,'0002',1,'8'),(46,'0001',1,'x'),(46,'0002',1,'1'),(47,'0001',1,'x'),(47,'0002',1,'x'),(48,'0001',1,'x'),(48,'0002',1,'x'),(49,'0001',1,'x'),(49,'0002',1,'x'),(50,'0001',1,'x'),(50,'0002',1,'x'),(51,'0001',1,'x'),(51,'0002',1,'x'),(52,'0001',1,'x'),(52,'0002',1,'x'),(53,'0001',1,'x'),(53,'0002',1,'x'),(54,'0001',1,'x'),(54,'0002',1,'x'),(55,'0001',1,'x'),(55,'0002',1,'x'),(56,'0001',1,'x'),(56,'0002',1,'x'),(57,'0001',1,'x'),(57,'0002',1,'x'),(58,'0001',1,'x'),(58,'0002',1,'x'),(59,'0001',1,'x'),(59,'0002',1,'x'),(60,'0001',1,'x'),(60,'0002',1,'8');
/*!40000 ALTER TABLE `tb_respraven` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_resultadosa`
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

LOCK TABLES `tb_resultadosa` WRITE;
/*!40000 ALTER TABLE `tb_resultadosa` DISABLE KEYS */;
INSERT INTO `tb_resultadosa` VALUES ('0001',5,'D',1,1,1,1,10,'AP','R',1),('0002',5,'D',1,1,1,1,10,'AP','R',1);
/*!40000 ALTER TABLE `tb_resultadosa` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `trigger_resultadosa` BEFORE INSERT ON `tb_resultadosa` FOR EACH ROW insert into tb_auxresultados (idaspirante,dfinal,prue,num_prue) values (NEW.idaspirante,NEW.dfinal,'A',NEW.prueba_num) */;;

DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;

--
-- Table structure for table `tb_resultadosb`
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

LOCK TABLES `tb_resultadosb` WRITE;
/*!40000 ALTER TABLE `tb_resultadosb` DISABLE KEYS */;
INSERT INTO `tb_resultadosb` VALUES ('0004',65,'NA',1,1,5,1,'AP','R',1);
/*!40000 ALTER TABLE `tb_resultadosb` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `trigger_resultadosb` BEFORE INSERT ON `tb_resultadosb` FOR EACH ROW insert into tb_auxresultados (idaspirante,dfinal,prue,num_prue) values (NEW.idaspirante,NEW.dfinal,'B',NEW.prueba_num) */;;

DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;

--
-- Temporary table structure for view `todos`
--

DROP TABLE IF EXISTS `todos`;
/*!50001 DROP VIEW IF EXISTS `todos`*/;
/*!50001 CREATE TABLE `todos` (
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
) */;

--
-- Final view structure for view `resultadosa`
--

/*!50001 DROP TABLE IF EXISTS `resultadosa`*/;
/*!50001 DROP VIEW IF EXISTS `resultadosa`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `resultadosa` AS select `t1`.`idaspirante` AS `idaspirante`,`t1`.`apellido` AS `apellido`,`t1`.`nombre` AS `nombre`,`t1`.`fecha` AS `fecha`,`t1`.`edad` AS `edad`,`t1`.`sexo` AS `sexo`,`t2`.`praven` AS `praven`,`t2`.`draven` AS `draven`,`t2`.`pcep_c` AS `pcep_c`,`t2`.`pcep_e` AS `pcep_e`,`t2`.`pcep_p` AS `pcep_p`,`t2`.`pcep_s` AS `pcep_s`,`t2`.`pcep_x` AS `pcep_x`,`t2`.`dcep` AS `dcep`,`t2`.`dfinal` AS `dfinal`,`t2`.`prueba_num` AS `prueba_num`,`t1`.`profesorado` AS `profesorado` from (`tb_aspirantes` `t1` join `tb_resultadosa` `t2` on((`t1`.`idaspirante` = `t2`.`idaspirante`))) */;

--
-- Final view structure for view `resultadosb`
--

/*!50001 DROP TABLE IF EXISTS `resultadosb`*/;
/*!50001 DROP VIEW IF EXISTS `resultadosb`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `resultadosb` AS select `t1`.`idaspirante` AS `idaspirante`,`t1`.`apellido` AS `apellido`,`t1`.`nombre` AS `nombre`,`t1`.`fecha` AS `fecha`,`t1`.`edad` AS `edad`,`t1`.`sexo` AS `sexo`,`t2`.`ciotis` AS `ciotis`,`t2`.`dotis` AS `dotis`,`t2`.`cepq_n` AS `cepq_n`,`t2`.`cepq_e` AS `cepq_e`,`t2`.`cepq_p` AS `cepq_p`,`t2`.`cepq_s` AS `cepq_s`,`t2`.`depq` AS `depq`,`t2`.`dfinal` AS `dfinal`,`t2`.`prueba_num` AS `prueba_num`,`t1`.`profesorado` AS `profesorado` from (`tb_aspirantes` `t1` join `tb_resultadosb` `t2` on((`t1`.`idaspirante` = `t2`.`idaspirante`))) */;

--
-- Final view structure for view `todos`
--

/*!50001 DROP TABLE IF EXISTS `todos`*/;
/*!50001 DROP VIEW IF EXISTS `todos`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `todos` AS select `t2`.`idaspirante` AS `idaspirante`,`t1`.`apellido` AS `apellido`,`t1`.`nombre` AS `nombre`,`t1`.`fecha` AS `fecha`,`t1`.`edad` AS `edad`,`t1`.`sexo` AS `sexo`,`t2`.`dfinal` AS `dfinal`,`t2`.`prue` AS `prue`,`t2`.`num_prue` AS `num_prue`,`t1`.`profesorado` AS `profesorado` from (`tb_auxresultados` `t2` join `tb_aspirantes` `t1` on((`t2`.`idaspirante` = `t1`.`idaspirante`))) order by `t2`.`idaspirante`,`t2`.`num_prue` */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-08-05 17:48:04
