//js final project



let vm = new Vue({
   
   el:'#app',

   data:{
      items:[
         {img:"1-1.jpg", text:"Learn more about organ donation"},
         {img:"1-2.jpg", text:"Register and fill in the form"},
         {img:"1-3.jpg", text:"Donate your organ"}
     ],
     vid:""

     
   },


   created(){
      this.vid = document.querySelector('#vid');
      this.respVid();

   },


   methods:{
      respVid(){
         let vid = document.querySelector('#vid');
         // if (window.matchMedia("(min-width: 480px)").matches) {
         //    this.vidSource(vid, "video/480.mp4", "video/mp4");
         //    /* The viewport is at least 400 pixels wide */
         //  } else if(window.matchMedia("(min-width: 720px)").matches) {
         //    this.vidSource(vid, "video/720.mp4", "video/mp4");
         //    /* The viewport is less than 400 pixels wide */
         //  }else if (window.matchMedia("(min-width: 1080px)").matches){
         //     this.vidSource(vid, "video/1080.mp4", "video/mp4");

         //  }

         if (window.matchMedia("(max-width: 480px)").matches) {
            //mobile
            this.vidSource(vid, "video/480.mp4", "video/mp4");
           }else if(window.matchMedia("(max-width: 720px)").matches){
             //tablet
             this.vidSource(vid, "video/720.mp4", "video/mp4");
           }else if(window.matchMedia("(min-width:1080px)").matches){
             //desktop
            this.vidSource(vid, "video/1080.mp4", "video/mp4");
           }
      },
      
      //  create new element
      vidSource(element,src,type){
         let source = document.createElement("source");
         source.src = src;
         source.type = type;

         element.appendChild(source);

      }
   }





});