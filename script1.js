var brandName = "Cloma";
let totalVisitors = 0;

console.log(brandName);
console.log(totalVisitors);

 function welcomeUser() {
    var userName = prompt("Welcome to " + brandName + "! Enter your name:");
    console.log(userName);
    if (userName != null && userName != "") {
        alert("Hello " + userName + "! Enjoy shopping with Cloma 😊");
    }
   }

    alert("Thank you for Choosing Cloma!");
   
  function countVisit() {
  totalVisitors ++;
  console.log("Visitors: " + totalVisitors);
   
     }

             
  

 

     function product(){
     let nameofproduct=prompt("Enter the product name you want: ");
     console.log(nameofproduct);
   let ask = confirm("Do you want to add " + nameofproduct + " to cart?");
  if (ask) {
   alert(nameofproduct + " added to cart!");
   window.location.href = "cart.html";
    } 

}


    
    const productImg = document.getElementById('pro');

    productImg.addEventListener('click', () => {
    
      const userConfirmed = confirm("Do you want to add this product to the cart?");

      if (userConfirmed) {
       
        window.location.href = "cart.html";  
      } else {
        
      }
    });
 


 welcomeUser();
countVisit();







 
            
   