<html>
<head>
<title>Resultado </title>
</head>
<body>

<p> Calculo </P>
<?php
	$Pluviosidade = ;
	$Area = ;
	$Solo = ;
	$NDVI = ;
	$Resultado = ;

	 === Run information ===

Scheme:       weka.classifiers.functions.LinearRegression -S 0 -R 1.0E-8 -num-decimal-places 4
Relation:     dados
Instances:    90
Attributes:   8
              fazenda
              indice_de_solo
              03_09_2017_min
              03_09_2017_max
              03_09__2017_med
              pluviosidade_media
              pluviosidade_inicial
              PRODUTIVIDA
Test mode:    10-fold cross-validation

=== Classifier model (full training set) ===


Linear Regression Model

PRODUTIVIDA =

     12.2748 * fazenda=macarena_1,ouro_preto_1,primavera_jacare,ouro_fino,barreiro_2,macarena_2,arrendamento_armando,arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -6.7648 * fazenda=ouro_preto_1,primavera_jacare,ouro_fino,barreiro_2,macarena_2,arrendamento_armando,arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.1088 * fazenda=primavera_jacare,ouro_fino,barreiro_2,macarena_2,arrendamento_armando,arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     12.3707 * fazenda=ouro_fino,barreiro_2,macarena_2,arrendamento_armando,arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.4645 * fazenda=barreiro_2,macarena_2,arrendamento_armando,arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -2.9327 * fazenda=arrendamento_armando,arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -2.8276 * fazenda=arrendamento_clemente,jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -1.2394 * fazenda=jauquara_beija,santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      4.2989 * fazenda=santa_rosa,santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      2.4373 * fazenda=santa_rita,judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      1.9533 * fazenda=judas_tadeu,faxinal,santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      2.3944 * fazenda=santa_maria,macuco,paranapu,jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      1.6656 * fazenda=jauquara,bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.6155 * fazenda=bonanza,barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.4896 * fazenda=barreiro_rico,barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -2.0977 * fazenda=barreiro_rico_2,n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -2.5833 * fazenda=n_aparecida,ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      2.1883 * fazenda=ouro_branco,vale_bracinho,boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      1.0047 * fazenda=boa_esperanca,igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -0.7191 * fazenda=igrejinha,boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
     -4.0781 * fazenda=boa_esperanca_2,bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      1.4238 * fazenda=bom_pastor,ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.4955 * fazenda=ouro_preto,esperanaa_3,vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      1.3988 * fazenda=vale_sonho,portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.2419 * fazenda=portal_barra,brasil,macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      3.4023 * fazenda=macaco,ouro_fino_2,paranapu_1,jauquara_santa_fe +
      7.9553 * fazenda=ouro_fino_2,paranapu_1,jauquara_santa_fe +
    -10.8065 * fazenda=paranapu_1,jauquara_santa_fe +
      3.9304 * fazenda=jauquara_santa_fe +
     -3.4126 * 03_09_2017_min=0,03,0,11,0,37,0,33,0,13,0,02,0,05,0,38,0,35,0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      1.4145 * 03_09_2017_min=0,37,0,33,0,13,0,02,0,05,0,38,0,35,0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      5.8861 * 03_09_2017_min=0,33,0,13,0,02,0,05,0,38,0,35,0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      2.905  * 03_09_2017_min=0,13,0,02,0,05,0,38,0,35,0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -1.183  * 03_09_2017_min=0,05,0,38,0,35,0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -1.228  * 03_09_2017_min=0,35,0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      1.807  * 03_09_2017_min=0,08,0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      2.3317 * 03_09_2017_min=0,3,0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      2.1929 * 03_09_2017_min=0,06,0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -6.2876 * 03_09_2017_min=0,15,0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -2.2429 * 03_09_2017_min=0,09,0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      2.348  * 03_09_2017_min=0,21,0,19,0,23,0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      1.9581 * 03_09_2017_min=0,31,0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      1.159  * 03_09_2017_min=0,04,0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -1.6393 * 03_09_2017_min=0,2,0,18,0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -0.6799 * 03_09_2017_min=0,1,0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      0.7318 * 03_09_2017_min=0,25,0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -1.1452 * 03_09_2017_min=0,12,0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -5.1575 * 03_09_2017_min=0,07,0,14,0,26,0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
      4.0415 * 03_09_2017_min=0,36,0,32,0,24,0,34,0,17,0,16,0,29,0,27 +
     -2.8444 * 03_09_2017_min=0,24,0,34,0,17,0,16,0,29,0,27 +
     -6.7145 * 03_09_2017_min=0,17,0,16,0,29,0,27 +
      4.7591 * 03_09_2017_min=0,16,0,29,0,27 +
      8.6053 * 03_09_2017_min=0,29,0,27 +
     -8.2737 * 03_09_2017_max=0,31,0,42,0,32,0,29,0,39,0,76,0,72,0,47,0,79,0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      6.9307 * 03_09_2017_max=0,42,0,32,0,29,0,39,0,76,0,72,0,47,0,79,0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      1.2699 * 03_09_2017_max=0,32,0,29,0,39,0,76,0,72,0,47,0,79,0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -2.1247 * 03_09_2017_max=0,39,0,76,0,72,0,47,0,79,0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -3.5765 * 03_09_2017_max=0,72,0,47,0,79,0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      4.1147 * 03_09_2017_max=0,47,0,79,0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -0.9442 * 03_09_2017_max=0,14,0,36,0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -1.0655 * 03_09_2017_max=0,43,0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -1.0828 * 03_09_2017_max=0,45,0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      2.0783 * 03_09_2017_max=0,34,0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      1.664  * 03_09_2017_max=0,12,0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      1.785  * 03_09_2017_max=0,77,0,46,0,81,0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -1.1593 * 03_09_2017_max=0,28,0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      1.4995 * 03_09_2017_max=0,41,0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      1.3075 * 03_09_2017_max=0,8,0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -1.0074 * 03_09_2017_max=0,48,0,44,0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -2.1567 * 03_09_2017_max=0,49,0,75,0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      3.2388 * 03_09_2017_max=0,16,0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      2.0152 * 03_09_2017_max=0,84,0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -1.2166 * 03_09_2017_max=0,17,0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -3.2907 * 03_09_2017_max=0,26,0,2,0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      2.3942 * 03_09_2017_max=0,19,0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -5.8344 * 03_09_2017_max=0,78,0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      3.9084 * 03_09_2017_max=0,51,0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -5.327  * 03_09_2017_max=0,33,0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
      2.7953 * 03_09_2017_max=0,83,0,13,0,15,0,25,0,18,0,74,0,24 +
     -3.0894 * 03_09_2017_max=0,13,0,15,0,25,0,18,0,74,0,24 +
      6.2401 * 03_09_2017_max=0,25,0,18,0,74,0,24 +
     11.5791 * 03_09_2017_max=0,18,0,74,0,24 +
      3.5939 * 03_09_2017_max=0,74,0,24 +
     -3.7554 * 03_09_2017_max=0,24 +
    -15.5435 * 03_09__2017_med=0,41,0,55,0,17,0,32,0,3,0,58,0,4,0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -2.5078 * 03_09__2017_med=0,17,0,32,0,3,0,58,0,4,0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      6.9138 * 03_09__2017_med=0,32,0,3,0,58,0,4,0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      3.1777 * 03_09__2017_med=0,3,0,58,0,4,0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -3.2009 * 03_09__2017_med=0,58,0,4,0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -2.0954 * 03_09__2017_med=0,4,0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      4.1766 * 03_09__2017_med=0,39,0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      2.6002 * 03_09__2017_med=0,59,0,45,0,31,0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      1.2126 * 03_09__2017_med=0,37,0,23,0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      1.626  * 03_09__2017_med=0,18,0,19,0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -3.9439 * 03_09__2017_med=0,14,0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -3.8351 * 03_09__2017_med=0,44,0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      1.6285 * 03_09__2017_med=0,42,0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      1.9466 * 03_09__2017_med=0,5,0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -2.59   * 03_09__2017_med=0,38,0,33,0,54,0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -1.8931 * 03_09__2017_med=0,46,0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      3.0855 * 03_09__2017_med=0,09,0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      4.4164 * 03_09__2017_med=0,43,0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -4.2159 * 03_09__2017_med=0,16,0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      1.4436 * 03_09__2017_med=0,26,0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -2.0052 * 03_09__2017_med=0,48,0,49,0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -0.7912 * 03_09__2017_med=0,24,0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      0.8947 * 03_09__2017_med=0,56,0,51,0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
      3.9193 * 03_09__2017_med=0,53,0,57,0,21,0,27,0,28,0,15,0,25 +
     -4.2689 * 03_09__2017_med=0,57,0,21,0,27,0,28,0,15,0,25 +
      2.7589 * 03_09__2017_med=0,21,0,27,0,28,0,15,0,25 +
     -3.1561 * 03_09__2017_med=0,28,0,15,0,25 +
      9.1587 * 03_09__2017_med=0,15,0,25 +
     20.7343 * 03_09__2017_med=0,25 +
      5.6148 * pluviosidade_inicial=1057,26,441,84,428,16,770,69,795,31,895,24,693,91,716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      8.1649 * pluviosidade_inicial=441,84,428,16,770,69,795,31,895,24,693,91,716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
     -1.5293 * pluviosidade_inicial=428,16,770,69,795,31,895,24,693,91,716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      1.3767 * pluviosidade_inicial=770,69,795,31,895,24,693,91,716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      4.104  * pluviosidade_inicial=795,31,895,24,693,91,716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      1.1106 * pluviosidade_inicial=693,91,716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      2.3401 * pluviosidade_inicial=716,09,907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
     -1.4022 * pluviosidade_inicial=907,42,879,32,1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      1.4131 * pluviosidade_inicial=1104,6,1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
     -2.9979 * pluviosidade_inicial=1080,5,1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      2.2745 * pluviosidade_inicial=1047,05,1070,4,923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      3.4179 * pluviosidade_inicial=923,85,994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      3.3384 * pluviosidade_inicial=994,14,963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
      3.2088 * pluviosidade_inicial=963,36,883,94,912,19,556,61,574,39,1000,34,1032,3 +
     -4.0176 * pluviosidade_inicial=883,94,912,19,556,61,574,39,1000,34,1032,3 +
     -3.1569 * pluviosidade_inicial=556,61,574,39,1000,34,1032,3 +
      8.0545 * pluviosidade_inicial=574,39,1000,34,1032,3 +
      3.9304 * pluviosidade_inicial=1000,34,1032,3 +
     32.7721

Time taken to build model: 0.44 seconds

=== Cross-validation ===
=== Summary ===

Correlation coefficient                  0.5349
Mean absolute error                      9.9066
Root mean squared error                 13.2916
Relative absolute error                 90.4806 %
Root relative squared error             90.4091 %
Total Number of Instances               90     
?>

<label>Fazendas</label>
<?php
?>

<label>Setor</label>
<?php
?>

<label>Talhão</label>
<?php
?>

<label>Pluviosidade</label>
<?php
?>

<label>Produtividade</label>
<?php
?>

</body>
</html>