let menu = document.getElementById('movil-menu');
let navbar = document.getElementById('navbar-default').classList;

menu.addEventListener('click',(e)=>{
    if(navbar.contains('hidden')){
        navbar.remove('hidden');
    }else{
        navbar.add('hidden');
    }
});