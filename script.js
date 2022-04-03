let switcher = document.querySelector("#product-type"),
    book = document.querySelector(".book"),
    furn = document.querySelector(".furniture"),
    dvd = document.querySelector(".dvd");




switcher.addEventListener("change",(e) =>{
     if(e.target.value == "dvd"){
         toggleEl(dvd,book,furn)
    }else if(e.target.value == "book"){
        toggleEl(book,dvd,furn)
    }else{
        toggleEl(furn,dvd,book)
    }
})


function toggleEl(el1,el2,el3){
    el1.classList.add("show");

    el2.classList.remove("show");
    el3.classList.remove("show");
}

// class Option{
//     toggleEl(){
//         return 0
//     }
// }

// class Dvd extends Option{
//     toggleEl(){
//         dvd.classList.add("show");

//         book.classList.remove("show");
//         furn.classList.remove("show");
//     }
// }
// class Book extends Option{
//     constructor(){
//         super();
//     }
//     toggleEl(){
//         book.classList.add("show");

//         dvd.classList.remove("show");
//         furn.classList.remove("show");
//     }
// }
// class furniture extends Option{
//     constructor(){
//         super();
//     }
//     toggleEl(){
//         furn.classList.add("show");

//         dvd.classList.remove("show");
//         furn.classList.remove("show");
//     }
// }