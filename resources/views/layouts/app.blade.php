<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">

    <title>BDE Cesi La Rochelle</title>
</head>

<body>

<<<<<<< HEAD

    <header>
        <nav>

            <ul class="top-nav" id="myTopnav">
                <li><a class="active" href="/">Accueil</a></li>
                <li><a href="/Evenements">Événements</a></li>
                <li><a href="http://localhost:81/ProjetWeb/public/Activités.blade.php">Activités</a></li>
                <li><a href="/Boutique">Boutique</a></li>
                <li><a href="/Contact">Contact</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </ul>

            <div id="aside-nav">

                <div class="logoBDE"><img class="logoBDE" src="{{asset('images/logoBDE.png')}}" alt="Logo du BDE"></div>
                <div class="logoCESI">
                    <a href="https://ecole-ingenieurs.cesi.fr/"><img class="logoCESI" src="{{asset('images/logoCESI.png')}}" alt="Logo du CESI"></a>
                </div>
               <!-- <div class="Connect"><a href="http://localhost:81/ProjetWeb/resources/views/pages/Inscription.blade.php">Espace Personnel</a></div>-->






                <div class="Connect">

  <div class="text-center">
    <a href="" id="connectBtn" data-toggle="modal" data-target="#modalLRForm">Espace Personnel</a>
  </div>

                </div>
                <div class="Social">
                    <span id="findUs">Retrouver nous sur</span>
                    <ul class="socialList">
                        <li>
                            <a id="icon" href="#twitter"> <svg class='icon1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24' height='24' viewBox='0 0 48 48' preserveAspectRatio='xMidYMid meet'><defs><path id='twitter-a' d='M43.2,0 L4.8,0 C2.16,0 0,2.16 0,4.8 L0,43.2 C0,45.84 2.16,48 4.8,48 L43.2,48 C45.84,48 48,45.84 48,43.2 L48,4.8 C48,2.16 45.84,0 43.2,0 Z M37.68,17.52 C37.44,28.56 30.48,36.24 19.92,36.72 C15.6,36.96 12.48,35.52 9.6,33.84 C12.72,34.3200941 16.8,33.1200941 18.96,31.2 C15.84,30.96 13.92,29.28 12.96,26.64 C13.92,26.88 14.88,26.64 15.6,26.64 C12.72,25.68 10.8,24 10.56,20.16 C11.28,20.64 12.24,20.88 13.2,20.88 C11.04,19.68 9.6,15.12 11.28,12.24 C14.4,15.6 18.24,18.48 24.48,18.96 C22.8,12.24 31.9200941,8.64 35.5200941,13.2 C37.2000941,12.96 38.4000941,12.24 39.6000941,11.76 C39.1200941,13.44 38.1600941,14.4 36.9600941,15.36 C38.1600941,15.12 39.3600941,14.88 40.3200941,14.4 C40.08,15.6 38.88,16.56 37.68,17.52 Z'/></defs><g fill-rule='evenodd'><mask id='twitter-b' fill='#fff'><use xlink:href='#twitter-a'/></mask><use style='fill: #fff' fill='currentColor' fill-rule='nonzero' xlink:href='#twitter-a'/><g style='fill: #fff' fill='currentColor' mask='url(#twitter-b)'><rect width='48' height='48'/></g></g></svg></a>
                        </li>
                        <li>
                            <a id="icon" href="#linkedin"><svg class='icon2' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24' height='24' viewBox='0 0 48 48' preserveAspectRatio='xMidYMid meet'><defs><path id='linkedin-a' d='M43.2,0 L4.8,0 C2.16,0 0,2.16 0,4.8 L0,43.2 C0,45.84 2.16,48 4.8,48 L43.2,48 C45.84,48 48,45.84 48,43.2 L48,4.8 C48,2.16 45.84,0 43.2,0 Z M14.4,40.8 L7.2,40.8 L7.2,19.2 L14.4,19.2 L14.4,40.8 Z M10.8,15.12 C8.4,15.12 6.48,13.2 6.48,10.8 C6.48,8.4 8.4,6.48 10.8,6.48 C13.2,6.48 15.12,8.4 15.12,10.8 C15.12,13.2 13.2,15.12 10.8,15.12 Z M40.8,40.8 L33.6,40.8 L33.6,28.08 C33.6,26.1600941 31.92,24.48 30,24.48 C28.08,24.48 26.4,26.1600941 26.4,28.08 L26.4,40.8 L19.2,40.8 L19.2,19.2 L26.4,19.2 L26.4,22.08 C27.6,20.16 30.24,18.72 32.4,18.72 C36.96,18.72 40.8,22.56 40.8,27.12 L40.8,40.8 Z'/></defs><g fill-rule='evenodd'><mask id='linkedin-b' fill='#fff'><use xlink:href='#linkedin-a'/></mask><use style='fill:#fff' fill='currentColor' fill-rule='nonzero' xlink:href='#linkedin-a'/><g style='fill:#fff' fill='currentColor' mask='url(#linkedin-b)'><rect width='48' height='48'/></g></g></svg></a>
                        </li>
                        <li>
                            <a id="icon" href="#youtube"><svg class='icon3' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24' height='24' viewBox='0 0 48 48' preserveAspectRatio='xMidYMid meet'><defs><path id='youtube-a' d='M43.2,0 L4.8,0 C2.16,0 0,2.16 0,4.8 L0,43.2 C0,45.84 2.16,48 4.8,48 L43.2,48 C45.84,48 48,45.84 48,43.2 L48,4.8 C48,2.16 45.84,0 43.2,0 Z M28.2979928,6.92612274 L30.3882455,6.92612274 L30.3882455,15.4117256 C30.3882455,15.9112202 30.3988159,16.1821516 30.4195235,16.2235668 C30.4401444,16.557574 30.6066715,16.7230614 30.9184982,16.7230614 C31.3342094,16.7230614 31.771148,16.4011841 32.2287076,15.7553502 L32.2287076,6.92612274 L34.3189603,6.92612274 L34.3189603,18.4696895 L32.2287076,18.4696895 L32.2287076,17.2215162 C31.3755379,18.1574296 30.5748736,18.6256462 29.8261949,18.6256462 C29.1601733,18.6256462 28.7131841,18.3451841 28.4847076,17.7835668 C28.3601155,17.4092708 28.2975596,16.8376029 28.2975596,16.0676968 L28.2975596,6.92612274 L28.2979928,6.92612274 Z M20.4041588,10.6697762 C20.4041588,9.46449097 20.6225848,8.55881588 21.0595235,7.95595668 C21.6210542,7.16638267 22.4323755,6.77025271 23.4928809,6.77025271 C24.5114513,6.77025271 25.3227726,7.16638267 25.9261516,7.95595668 C26.3630903,8.55933574 26.581083,9.46449097 26.581083,10.6697762 L26.581083,14.7256895 C26.581083,15.973343 26.362657,16.8791047 25.9261516,17.439509 C25.3226859,18.2306426 24.5114513,18.625213 23.4928809,18.625213 C22.4323755,18.625213 21.6210542,18.2301227 21.0595235,17.439509 C20.6225848,16.8376895 20.4041588,15.9330542 20.4041588,14.7256895 L20.4041588,10.6697762 Z M14.7887653,2.96412996 L16.4425993,9.04774007 L18.0333574,2.96412996 L20.3734007,2.96412996 L17.5656606,12.1995379 L17.5656606,18.4697762 L15.2569819,18.4697762 L15.2569819,12.1995379 C15.0278989,11.0552491 14.5496318,9.41250542 13.8216606,7.26983394 C13.6758412,6.79208664 13.4361011,6.07407942 13.1036534,5.11650542 C12.7706859,4.16101083 12.5208953,3.44300361 12.3548881,2.96412996 L14.7887653,2.96421661 L14.7887653,2.96412996 Z M40.4970108,40.6209964 C40.2886354,41.5167076 39.8463249,42.2750036 39.1707726,42.8990903 C38.4947004,43.5231769 37.7094585,43.8873357 36.8153935,43.990787 C33.9657184,44.3027004 29.6808087,44.4590036 23.9615307,44.4590036 C18.2411264,44.4590036 13.9567365,44.3031336 11.1076679,43.990787 C10.213083,43.8874224 9.42784116,43.5227437 8.75228881,42.8990903 C8.07621661,42.2750036 7.63399278,41.5172274 7.42665704,40.6209964 C7.01042599,38.8744549 6.8025704,36.1700794 6.8025704,32.5092563 C6.8025704,28.9115957 7.01042599,26.2072202 7.42665704,24.3975162 C7.63451264,23.4833502 8.07673646,22.7192491 8.75228881,22.1051264 C9.42784116,21.4910903 10.2237401,21.1326498 11.1389458,21.027639 C13.9673069,20.7158123 18.2417329,20.5594224 23.9620505,20.5594224 C29.702556,20.5594224 33.9870325,20.7152924 36.8159134,21.027639 C37.7104116,21.1326498 38.5010253,21.4905704 39.187148,22.1051264 C39.8738773,22.7191625 40.3208664,23.4832635 40.528722,24.3975162 C40.9237256,26.1244765 41.1215307,28.8278123 41.1215307,32.5092563 C41.1206643,36.1700794 40.912722,38.8744549 40.4970108,40.6209964 Z M28.8595235,28.3292708 C28.1108448,28.3292708 27.4034946,28.7450686 26.7380794,29.5769242 L26.7380794,24.5533863 L24.6478267,24.5533863 L24.6478267,39.9349603 L26.7380794,39.9349603 L26.7380794,38.8112924 C27.4242022,39.6645487 28.1310325,40.0908303 28.8595235,40.0908303 C29.7122599,40.0908303 30.2631336,39.6544116 30.5129242,38.7805343 C30.6582238,38.3430758 30.7313502,37.5847798 30.7313502,36.5026137 L30.7313502,31.9472924 C30.7313502,30.8452852 30.6581372,30.0754657 30.5129242,29.6390469 C30.2631336,28.7651697 29.7122599,28.3292708 28.8595235,28.3292708 Z M28.6723755,36.658917 C28.6723755,37.6791336 28.3706859,38.1872058 27.7673069,38.1872058 C27.4136318,38.1872058 27.0705271,38.0211986 26.7380794,37.6888375 L26.7380794,30.6995523 C27.0705271,30.3680578 27.4136318,30.2010108 27.7673069,30.2010108 C28.3701661,30.2010108 28.6723755,30.721213 28.6723755,31.7610975 L28.6723755,36.658917 Z M35.4733863,28.3292708 C34.4128809,28.3292708 33.5803321,28.7254007 32.9774729,29.5150614 C32.5612419,30.0755523 32.3533863,30.9716101 32.3533863,32.1976029 L32.3533863,36.223278 C32.3533863,37.4503105 32.5718123,38.3436823 33.0087509,38.9058195 C33.6116101,39.6969531 34.4542094,40.0914368 35.5359422,40.0914368 C36.6383827,40.0914368 37.4702383,39.6758123 38.0318556,38.8432635 C38.2816462,38.4689675 38.4375162,38.0536895 38.5000722,37.5950903 C38.5414007,37.3050108 38.5621083,36.8564621 38.5621083,36.2529964 L38.5621083,35.9726209 L36.4405776,35.9726209 C36.4405776,36.2016173 36.4405776,36.4248087 36.4405776,36.6427148 C36.4405776,36.8606209 36.4352058,37.0324332 36.4251552,37.1581516 C36.4145848,37.2822238 36.4098195,37.3554368 36.4098195,37.3761444 C36.2852274,37.9174874 35.9728809,38.186426 35.4739061,38.186426 C34.7664693,38.186426 34.4134007,37.6560866 34.4134007,36.5961877 L34.4134007,34.5678845 L38.5626282,34.5678845 L38.5626282,32.1972563 C38.5626282,30.9918845 38.3442022,30.0973863 37.9076968,29.5145415 C37.3457329,28.7254007 36.5344116,28.3292708 35.4733863,28.3292708 Z M36.4718556,32.8529675 L34.4127942,32.8529675 L34.4127942,31.7912491 C34.4127942,30.730917 34.7558989,30.2010108 35.4421083,30.2010108 C36.1287509,30.2010108 36.4718556,30.7313502 36.4718556,31.7912491 L36.4718556,32.8529675 Z M20.7784549,37.2206209 L20.7790614,37.2206209 L20.7790614,28.4851408 L22.8693141,28.4850542 L22.8693141,39.9349603 L20.7790614,39.9349603 L20.7790614,38.686787 C19.9677401,39.6226137 19.1771264,40.0908303 18.4077401,40.0908303 C17.7215307,40.0908303 17.2846787,39.8007509 17.097444,39.2169531 C16.972852,38.8844188 16.910296,38.3239278 16.910296,37.5327942 L16.910296,28.4850542 L18.9692708,28.4850542 L18.9692708,36.9087076 C18.9692708,37.4072491 18.9793213,37.6787004 19.0005487,37.7189892 C19.0206498,38.0313357 19.1765199,38.1872058 19.4681588,38.1872058 C19.8839567,38.1872058 20.3208953,37.8653285 20.7784549,37.2206209 Z M23.4934007,16.723148 C22.8273791,16.723148 22.4949314,16.191769 22.4949314,15.1313502 L22.4949314,10.2635957 C22.4949314,9.18238267 22.8273791,8.64155957 23.4934007,8.64155957 C24.1589025,8.64155957 24.49187,9.18238267 24.49187,10.2635957 L24.49187,15.1313502 C24.49187,16.1918556 24.1589025,16.723148 23.4934007,16.723148 Z M9.36,26.7375596 L9.36,24.5533863 L16.5979495,24.5533863 L16.5979495,26.7375596 L14.1021227,26.7375596 L14.1021227,39.9349603 L11.7933574,39.9349603 L11.7933574,26.7375596 L9.36,26.7375596 Z'/></defs><g fill-rule='evenodd'><mask id='youtube-b' fill='#fff'><use xlink:href='#youtube-a'/></mask><use style='fill: #fff' fill='currentColor' fill-rule='nonzero' xlink:href='#youtube-a'/><g style='fill: #fff' fill='currentColor' mask='url(#youtube-b)'><rect width='24' height='24'/></g></g></svg></a>
                        </li>
                        <li>
                            <a id="icon" href="#vivadeo"><svg class='icon4' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24' height='24' viewBox='0 0 48 48' preserveAspectRatio='xMidYMid meet'><defs><path id='viadeo-a' d='M40.9925106,12.9068936 C40.9215319,14.0420426 40.7055319,15.1526809 40.3363404,16.2306383 C40.157617,16.7494468 39.9012766,17.232 39.6250213,17.7038298 C39.1485957,18.5177872 38.5848511,19.2628085 37.8658723,19.8822128 C37.1249362,20.5210213 36.2808511,20.9499574 35.3116596,21.1184681 C34.5135319,21.2578723 33.732766,21.1884255 32.9657872,20.9361702 C32.1502979,20.6675745 31.4379574,20.2243404 30.7848511,19.6759149 C30.612766,19.5308936 30.4483404,19.3756596 30.275234,19.2204255 C30.3462128,19.1019574 30.4575319,19.0667234 30.5509787,19.0125957 C31.8275745,18.2721702 33.0566809,17.4628085 34.2306383,16.5686809 C35.1988085,15.8308085 36.1205106,15.0398298 36.9334468,14.1278298 C37.4006809,13.602383 37.8188936,13.0427234 38.1314043,12.4090213 C38.2718298,12.1210213 38.3831489,11.8222979 38.4520851,11.508766 C38.4643404,11.4531064 38.4617872,11.3938723 38.4684255,11.2728511 C36.3942128,14.8886809 33.3921702,17.1742979 29.3954043,18.1537021 C29.346383,18.0873191 29.3116596,18.0500426 29.2876596,18.0066383 C28.7969362,17.117617 28.5074043,16.1683404 28.4619574,15.1526809 C28.4073191,13.9097872 28.7749787,12.7986383 29.5363404,11.8131064 C29.9443404,11.2830638 30.4406809,10.8582128 31.0182128,10.5227234 C31.8597447,10.0335319 32.7605106,9.68680851 33.6919149,9.41412766 C33.8006809,9.38195745 33.9104681,9.35182979 34.0202553,9.3252766 C35.2840851,9.01634043 36.3548936,8.36629787 37.284766,7.46910638 C37.8975319,6.8772766 38.3938723,6.19761702 38.7916596,5.44442553 C38.8524255,5.32902128 38.9182979,5.21514894 38.9969362,5.07114894 C39.1021277,5.23914894 39.1925106,5.37548936 39.2747234,5.51744681 C39.8517447,6.51268085 40.2704681,7.57225532 40.5702128,8.68085106 C40.9429787,10.0657021 41.0808511,11.4771064 40.9925106,12.9068936 M34.8709787,30.4411915 C34.7085957,33.2946383 33.7838298,35.8774468 32.075234,38.1742979 C31.2137872,39.3293617 30.2308085,40.3634043 29.0685957,41.2233191 C27.5785532,42.3252766 25.9235745,43.0478298 24.1123404,43.428766 C22.7724255,43.7116596 21.4166809,43.7882553 20.0537872,43.7203404 C18.5851915,43.6473191 17.1513191,43.3731064 15.7731064,42.8466383 C14.2937872,42.2818723 12.965617,41.4643404 11.8008511,40.3930213 C10.2255319,38.9438298 8.98314894,37.2531064 8.13038298,35.2835745 C7.60442553,34.0651915 7.27046809,32.795234 7.10297872,31.4788085 C6.98553191,30.5443404 6.95387234,29.6078298 7.00442553,28.6702979 C7.17804255,25.4119149 8.30808511,22.530383 10.4262128,20.0415319 C11.3805957,18.9201702 12.4621277,17.9422979 13.7137021,17.1584681 C15.0275745,16.3358298 16.4476596,15.7746383 17.9683404,15.4723404 C19.2377872,15.2200851 20.5184681,15.132766 21.8114043,15.2068085 C23.0211064,15.275234 24.2052766,15.4774468 25.3572766,15.8476596 C25.4925957,15.8905532 25.6381277,15.9145532 25.7708936,16.0197447 C25.5273191,16.541617 25.2919149,17.0675745 25.1157447,17.616 C24.9421277,18.1644255 24.8246809,18.7266383 24.7516596,19.32 C24.6418723,19.2862979 24.5642553,19.2674043 24.4897021,19.2382979 C23.6389787,18.9084255 22.7550638,18.7113191 21.8471489,18.6408511 C21.138383,18.5846809 20.4275745,18.5882553 19.7172766,18.672 C18.9160851,18.7669787 18.1368511,18.947234 17.381617,19.2326809 C16.2102128,19.6754043 15.1725957,20.3320851 14.2422128,21.1664681 C13.037617,22.2464681 12.0730213,23.5051915 11.4132766,24.9880851 C10.9710638,25.9833191 10.6968511,27.0245106 10.5671489,28.1060426 C10.4609362,28.9899574 10.4410213,29.874383 10.5293617,30.7593191 C10.6789787,32.2631489 11.1125106,33.6842553 11.8350638,35.0129362 C12.5116596,36.2594043 13.379234,37.349617 14.4990638,38.2284255 C15.7940426,39.2435745 17.250383,39.9104681 18.8680851,40.2270638 C19.0085106,40.2551489 19.1290213,40.2382979 19.2546383,40.1867234 C20.4393191,39.6954894 21.485617,38.9923404 22.4057872,38.100766 C23.4071489,37.1315745 24.2022128,36.0081702 24.864,34.7867234 C25.608,33.413617 26.1584681,31.9613617 26.5981277,30.4657021 C26.9545532,29.2483404 27.2282553,28.0115745 27.4411915,26.7625532 C27.611234,25.7673191 27.7394043,24.7664681 27.8415319,23.7615319 C28.0651915,21.5846809 28.1234043,19.4017021 28.0779574,17.2161702 C28.0708085,16.8428936 28.0462979,16.4114043 28.0309787,15.9906383 C28.0003404,15.7654468 27.9901277,15.683234 27.9809362,15.6362553 L27.8900426,15.4692766 C27.5826383,14.6721702 27.2885106,13.8699574 26.9662979,13.0794894 C25.7933617,10.1948936 24.420766,7.40782979 22.8561702,4.7147234 C22.7892766,4.59931915 22.7193191,4.48442553 22.6565106,4.36646809 C22.6442553,4.34553191 22.6565106,4.31131915 22.6605957,4.25514894 C22.7668085,4.34042553 22.8561702,4.40834043 22.9409362,4.4813617 C23.8417021,5.25140426 24.5795745,6.16085106 25.2188936,7.15251064 C26.1477447,8.59097872 26.8110638,10.1484255 27.2772766,11.7931915 C27.6224681,13.0044255 27.8497021,14.237617 27.9814468,15.4891915 C27.9834894,15.5045106 27.9865532,15.5790638 27.9865532,15.6209362 C27.9942128,15.6648511 28.0044255,15.7378723 28.0360851,15.9758298 C28.0713191,16.0396596 28.122383,16.1479149 28.139234,16.1923404 C28.6774468,17.634383 29.0946383,19.109617 29.3596596,20.6246809 C29.5940426,21.9569362 29.7130213,23.3009362 29.6839149,24.6546383 C29.6205957,27.4258723 28.9960851,30.0633191 27.7674894,32.5485957 C26.2891915,35.5394043 24.1991489,38.0257021 21.5433191,40.0411915 C21.4125957,40.1412766 21.2788085,40.2382979 21.1475745,40.3373617 C21.1424681,40.3409362 21.1434894,40.3547234 21.132766,40.4124255 C21.3885957,40.4017021 21.6245106,40.4042553 21.8599149,40.3833191 C24.3993191,40.152 26.5894468,39.162383 28.3690213,37.3235745 C29.5879149,36.0638298 30.413617,34.5671489 30.9262979,32.8948085 C31.2674043,31.7826383 31.4170213,30.6403404 31.4042553,29.4801702 C31.3874043,28.0871489 31.1596596,26.7324255 30.6444255,25.4328511 C30.6255319,25.3848511 30.6086809,25.3358298 30.5933617,25.2862979 C30.5862128,25.2674043 30.5897872,25.2454468 30.5862128,25.212766 C30.9554043,25.1034894 31.331234,25.0069787 31.6978723,24.8793191 C32.0573617,24.7547234 32.4107234,24.6117447 32.7564255,24.4524255 C33.1102979,24.2900426 33.4524255,24.0975319 33.8134468,23.9111489 C33.8451064,23.9749787 33.8803404,24.0362553 33.9053617,24.1011064 C34.2765957,25.0228085 34.5268085,25.9771915 34.6902128,26.9555745 C34.8822128,28.1131915 34.9363404,29.2759149 34.8709787,30.4411915 M43.2,0 L4.8,0 C2.16,0 0,2.16 0,4.8 L0,43.2 C0,45.84 2.16,48 4.8,48 L43.2,48 C45.84,48 48,45.84 48,43.2 L48,4.8 C48,2.16 45.84,0 43.2,0 Z'/></defs><g fill-rule='evenodd'><mask id='viadeo-b' fill='#fff'><use xlink:href='#viadeo-a'/></mask><use style='fill:#fff' fill='currentColor' xlink:href='#viadeo-a'/><g style='fill:#fff' fill='currentColor' mask='url(#viadeo-b)'><rect width='24' height='24'/></g></g></svg></a>
                        </li>
                        <li>
                            <a id="icon" href="#instagram"><svg class='icon5' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24' height='24' viewBox='0 0 48 48' preserveAspectRatio='xMidYMid meet'><defs><path id='instagram-a' d='M43.2,0 L4.8,0 C2.16,0 0,2.16 0,4.8 L0,43.2 C0,45.84 2.16,48 4.8,48 L43.2,48 C45.84,48 48,45.84 48,43.2 L48,4.8 C48,2.16 45.84,0 43.2,0 Z M24,14.4 C29.28,14.4 33.6,18.72 33.6,24 C33.6,29.28 29.28,33.6 24,33.6 C18.72,33.6 14.4,29.28 14.4,24 C14.4,18.72 18.72,14.4 24,14.4 Z M6,43.2 C5.28,43.2 4.8,42.72 4.8,42 L4.8,21.6 L9.84,21.6 C9.6,22.32 9.6,23.28 9.6,24 C9.6,31.92 16.08,38.4 24,38.4 C31.92,38.4 38.4,31.92 38.4,24 C38.4,23.28 38.4,22.32 38.16,21.6 L43.2,21.6 L43.2,42 C43.2,42.72 42.72,43.2 42,43.2 L6,43.2 Z M43.2,10.8 C43.2,11.52 42.72,12 42,12 L37.2,12 C36.48,12 36,11.52 36,10.8 L36,6 C36,5.28 36.48,4.8 37.2,4.8 L42,4.8 C42.72,4.8 43.2,5.28 43.2,6 L43.2,10.8 Z'/></defs><g fill-rule='evenodd'><mask id='instagram-b' fill='#fff'><use xlink:href='#instagram-a'/></mask><use style='fill: #fff' fill='currentColor' fill-rule='nonzero' xlink:href='#instagram-a'/><g style='fill: #fff' fill='currentColor' mask='url(#instagram-b)'><rect width='48' height='48'/></g></g></svg>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
=======
@include('inc.navbar')
>>>>>>> master

@yield('content')



<footer>
    <a href="mentions">Mentions Légales</a>
    <span>-</span>
    <a href="confidentialité">Politique de Confidentialité</a>
</footer>


@include('inc.logReg')
</body>

</html>

{{-- Script for responsive top nav --}}
<script>
    function expandLinks() {
        var x = document.getElementById("myTopnav");
        if (x.className === "top-nav") {
            x.className += " responsive";
        } else {
            x.className = "top-nav";
        }
    }
</script>