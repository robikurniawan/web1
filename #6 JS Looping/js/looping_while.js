 
document.write("<h1>1. Perulangan While </h1>");

let counter = 1;

while(counter < 10) {

    document.write("Perulangan While = " + counter + "<br>")
    if(counter == 7) 
        break;

    counter++;
}

 document.write("Perulangan dilakukan sebanyak  " +  counter + " Kali ");

 document.write("<p>--------------------------</p> ");

 document.write("<h1>2. Perulangan While Nested </h1>");

 let i = 1
 let count = 10
 let bintang = "";

 while (i < count) {
     
     bintang += i +"*".repeat(i) + "<br>";
    
     i++;
 }

document.write(bintang + " <br>")

