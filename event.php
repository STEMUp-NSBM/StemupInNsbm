<?php include 'includes/head.php'; ?>

<body>
<?php include 'includes/navbar.php'; ?>

<div class="container">
    <div class="hero-event"></div>
    <div class="hero-event-content">
        <h1>Our Events</h1>
        <p><span class="home">Home</span> / <span>Events</span></p>
    </div>
</div>

<section>
    <div class="event-post-title">
        <h3>VIEW OUR EVENT</h3>
        <h1>List of Posts</h1>
    </div>

    <div class="container">
        <div class="row mt-5">

        <!--Event Box1-->

         <div class="col-md-4 mb-5">
          <a href="" class="card">
             <div class="card-top">
              <img src="assets/images/microbit.png" class="card__image" alt="" />
             </div>
             <div class="card__overlay">
               <div class="card__header">
                 <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                   <h3 class="card__title">Micro:bit SLUG</h3>            
                 </div>
               </div>
               <p class="card__description">Micro:bit Sri Lanka from its initiation has strived to empower the community by teaching kids programming using Micro:bit devices.
               </p>
             </div>
          </a>
         </div>

      <!--Event Box2-->
      <div class="col-md-4 mb-5">
        <a href="" class="card">
           <div class="card-top">
            <img src="assets/images/CoderDojo-Sri-Lanka-logo.png" class="card__image" alt="" />
           </div>
           <div class="card__overlay">
             <div class="card__header">
               <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
               <div class="card__header-text">
                 <h3 class="card__title">CoderDojo Sri Lanka</h3>            
               </div>
             </div>
             <p class="card__description">CoderDojo Sri Lanka is the Sri Lankan network of “CoderDojo” – an international movement oriented around the running of fun, free and social coding clubs for young people.
             </p>
           </div>
        </a>
       </div>

       <!--Event Box3-->

       <div class="col-md-4 mb-5">
        <a href="" class="card">
        <div class="card-top">
            <img src="assets/images/ML-for-Kids-Logo.png" class="card__image" alt="" />
        </div>
        <div class="card__overlay">
            <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
            <div class="card__header-text">
                <h3 class="card__title">Machine Learning for Kids</h3>            
            </div>
            </div>
            <p class="card__description">There is a high probability of being no field left untouched by ML and AI in the future. All of which makes it very important for us to ensure that our kids are well versed in both ML & AI
            </p>
        </div>
        </a>
        </div>
   </div>

      <div class="text-center">
       <a href="#" class="button button-primary">View all events</a>
      </div>
 </div>
</section>


<?php include 'includes/footer.php'; ?>