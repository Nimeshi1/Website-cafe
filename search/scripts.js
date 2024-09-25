let products={
    data:[{
        productName:"Rice & Curry",
        category:"SriLankan",
        price:"300",
        image:"pic14.jpg",
    },
    {
        productName:"Kottu",
        category:"SriLankan",
        price:"700",
        image:"pic15.jpg",
    },
    {
        productName:"Hoppers",
        category:"SriLankan",
        price:"150",
        image:"pic16.jpg",
    },
    {
        productName:"String Hoppers",
        category:"SriLankan",
        price:"300",
        image:"pic17.jpeg",
    },
    {
        productName:"Curd & Honey",
        category:"SriLankan",
        price:"100",
        image:"pic18.jfif",
    },
    {
        productName:"Fruit salad",
        category:"SriLankan",
        price:"100",
        image:"pic20.jfif",
    },
    {
        productName:"Dumplins",
        category:"Chineese",
        price:"300",
        image:"pic10.jpg",
    },
    {
        productName:"Honey sesame chicken",
        category:"Chineese",
        price:"400",
        image:"pic11.jpg",
    },
    {
        productName:"Fried Rice",
        category:"Chineese",
        price:"600",
        image:"pic12.jpg",
    },
    {
        productName:"Wontons noodles",
        category:"Chineese",
        price:"800",
        image:"pic13.jpg",
    },
    {
        productName:"Almond cookies",
        category:"Chineese",
        price:"200",
        image:"pic8.jpg",
    },
    {
        productName:"Yellow pea cake",
        category:"Chineese",
        price:"100",
        image:"pic9.png",
    },
    {
        productName:"Pizza",
        category:"Italian",
        price:"650",
        image:"pic3.jpg",
    },
    {
        productName:"Lasagna",
        category:"Italian",
        price:"700",
        image:"pic2.jpg",
    },
    {
        productName:"Spaghetti",
        category:"Italian",
        price:"300",
        image:"pic4.jpg",
    },
    {
        productName:"Risotto",
        category:"Italian",
        price:"400",
        image:"pic5.jpg",
    },
    {
        productName:"Gelato",
        category:"Italian",
        price:"300",
        image:"pic6.jfif",
    },
    {
        productName:"Tiramisu",
        category:"Italian",
        price:"300",
        image:"pic7.jpeg",
    },
],
};
for(let i of products.data){
    let card = document.createElement("div");
    card.classList.add("card",i.category,"hide");
    let imgContainer=document.createElement("div");
    imgContainer.classList.add("image-container");
    let image=document.createElement("img");
    image.setAttribute("src",i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    let container=document.createElement("div");
    container.classList.add("container");
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText=i.productName.toUpperCase();
    container.appendChild(name);
    let price=document.createElement("h6");
    price.innerText="Rs." + i.price;
    container.appendChild(price);
    
    card.appendChild(container);
    document.getElementById("products").appendChild(card);
}
function filterProduct(value){
    let buttons=document.querySelectorAll(".button-value");
    buttons.forEach(button => {
       if(value.toUpperCase() == button.innerText.toUpperCase()){
        button.classList.add("active");
       }
       else{
        button.classList.remove("active");
       }
    });

    let elements = document.querySelectorAll(".card");
    elements.forEach((element) => {
        if(value == "all"){
            element.classList.remove("hide");
        }
        else{
            if(element.classList.contains(value)){
                element.classList.remove("hide");
            }
            else{
                element.classList.add("hide");
            }
        }
    });

}

document.getElementById("search").addEventListener("click", () => {
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
    
    elements.forEach ((element, index) => {
        if(element.innerText.includes(searchInput.toUpperCase())){
           cards[index].classList.remove("hide");
        }
        else{
            cards[index].classList.add("hide");
        }
    });
});


window.onload=()=>{
    filterProduct("all");
};