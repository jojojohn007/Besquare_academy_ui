   
  let result = false
  var calltype = $(".exercise").attr('call_type') 
    $(document).ready(function(){

      // $(document).ready('onload' , '.carda' ,  function(event){

      //
  // current exercise 

  $.getJSON(pageurl+getajaxfrom , { calltype:calltype,
     studentmail:email ,
      studentname:studentname,
      classname:classname
    },
 
  function(data,textstatus,xhr){
    let newarray = data.progress
    let result = newarray.includes(calltype);
    

   
      }); 
    });
  // });
  

  let out1 = document.querySelector('.value1')
   let out2 = document.querySelector('.value2')
console.log(out1)
    const message = document.querySelector('.message')
    let msg=document.querySelector('.msg-span')
   
    message.style.display='none'

   
let randomN1 =Math.floor(Math.random()* (200 -100 ))+100
let randomN2 =Math.floor(Math.random()* (200 -100 ))+100

out1.textContent = randomN1 
out2.textContent = randomN2

// == (randomN1+randomN2)



function continueon(){
 window.location.replace(pageurl+nextpage)   //next exercise
    
}

function check(){
  
    let continuebtn = document.createElement('button')
continuebtn.classList.add( 'tryagain', 'btn' , 'btn-danger')
continuebtn.setAttribute('onclick' , 'tryagain()')
 let div= document.querySelector('#input')
div.appendChild(continuebtn)
       continuebtn.textContent='Tryagain..'
    
}

function tryagain() {
    document.querySelector('.tryagain').remove()
}


document.addEventListener('keyup', (event) => {
    var name = event.key;

 
   

    let answer=  document.getElementById('answer').value
console.log(result)
    if(answer  == (randomN1+randomN2)){
      

   if(result==false){
      $.getJSON(pageurl+getajaxfrom , { calltype:"insert",
      exercise:ex ,
      cardname:calltype
      ,
       studentname:studentname,
       classname:classname
     },
  
   function(data,textstatus,xhr){
   console.log(data.progress)
   console.log(data.url)

       }); 

      }

     
      
        if(!(document.querySelector('.continue'))){
            message.style.display='block'
            msg.classList.add('animate')
            document.querySelector('.btn-info').remove()
let continuebtn = document.createElement('button')
continuebtn.classList.add( 'continue', 'btn' , 'btn-success')
continuebtn.setAttribute('onclick' , 'continueon()')
 let div= document.querySelector('.ct')
div.appendChild(continuebtn)
       continuebtn.textContent='Continue..'

    }

    }
    if(name=='Enter' && answer){
        console.log('jkdkd')
        window.location.replace(pageurl+nextpage)   //for pages to go backward
 }

  }, true);

  window.addEventListener('popstate',e =>{
    console.log(e)
    location.reload()
  })

