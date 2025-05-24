const product=[
    {
        id:0,
        image:`images/1.png `,
        title:`Mocha frappe caramel`,
        price: 7,
    },
    {
        id:1,
        image:`images/2.png `,
        title:`White latte coffe`,
        price: 6,
    },
    {
        id:2,
        image:`images/3.png `,
        title:`Love with coffe`,
        price: 8,
    },
    {
        id:3,
        image:`images/4.png `,
        title:`Italiano coffe`,
        price: 5,
    },
    {
        id:4,
        image:`images/5.png `,
        title:`Share Love`,
        price: 10,
    },
    {
        id:5,
      image:`images/6.png `,
        title:`Mocha love`,
        price: 7,
    },
    {
        id:6,
        image:`images/7.png `,
        title:`Milk shake lotus`,
        price: 4,
    },
    {
        id:7,
        image:`images/8.png `,
        title:`Barista`,
        price: 2,
    },
];
// map Purpose: Ensures that all products are unique in the categories array.

// Uses Set() to remove duplicates based on mapping.
//ALL IS IN THE CATEGORIES ARRAY
//The ... (spread operator) converts Set back into an array.
const categories=[...new Set(product.map((item)=>{return item}
))]
//  step 2//displaying product card .
let i=0;
// Uses .map() to loop through each product.
// display cards dynamically inside #root.
// .map1️⃣ Loops through each item in categories 2️⃣ Transforms each item into a new format (HTML code in your case) 3️⃣ Creates a new array with the modified data
document.getElementById('root').innerHTML=categories.map((item)=>{
    var { image,title,price}=item;
    return(
// This is a template literal (backticks ``) in JavaScript that generates an HTML structure dynamically.
        // div boxPurpose: Creates a wrapper for each product card.
        `<div class='box'>
        <div class ='imag-box'>
        <img class='images' src=${image}></img>
        </div>
        <div class='bottom'>
        <p class='tittle'>${title}</p>
        <h2>$ ${price}.00</h2>
        `+
//         i++ ensures each product gets a unique index.

// Passes the index to addtocart() so the correct product is added to the shopping cart.
        "<button onclick='addtocart("+(i++)+")'>Add to cart </button>"+
        `</div>
        </div>`
    )
}).join('')
var cart=[];
function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a,1);
    displaycart();
}
function displaycart(a){
    let j=0,total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById("cartItem").innerHTML="YOUR CART IS Empty";
        document.getElementById("total").innerHTML="$"+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML=cart.map((items)=>
            {
               
            var {image,title,price} = items;
            total=total+price;
            document.getElementById("total").innerHTML="$ "+total+".00";
            return(  `<div class='cart-item'>
                <div class='row-img'>
                <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size:15px;'>$ ${price}.00</h2>
                `+"<i class='fa-solid fa-trash' onclick='delElement("+(j++)+")'></i></div>"
            )
              
            }).join('');
        }
        
        
    }
