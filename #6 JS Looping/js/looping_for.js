 
 
 document.write("<h1>1. Perulangan For </h1>");
 for (i = 0; i < 20; i++) {
     document.write("Ini adalah perulangan ke " + i + " <br>");
 }
 document.write("-------------------------- ");





 document.write("<h1>2. Perulangan Foreach </h1>");

 // membuat variabel array dengan beberapa nama hari didalamnya
 let days = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];

 days.forEach((day) => {

    document.write("<p> Hari " + day + "</p>")
    
 })

 /* menampilkan nama hari berdasarkan index cth index ke 4 akan menampilkan hari jumat,
  (Urutan index dimulai dari 0,1,2,3 dst..) 
  */
 console.log("data ini dipanggil berdasarkan index pada array " + days[4]);
 /* perintah console.log dapat dilihat pada browser dengan cara 
    klik kanan pada browser kemudian pilih inspect element
    setelah itu pilih tab Console 
  */



 document.write("-------------------------- ");
 document.write("<h1>3. Perulangan Repeat </h1>");
 document.write("Ulangi <br>".repeat(10));

 document.write("-------------------------- ");




  document.write("<h1>4. Perulangan Nested For (Bersarang)  </h1>");
  for (i = 0; i < 5; i++) {
        for (x = 0; x < 5; x++) {
            document.write("Ini adalah Nested perulangan ke " + i + " . "+ x +"<br>");
        }
  }
    /* 
        Nested perulangan adalah perulangan didalam perulangan,
    */
  document.write("-------------------------- ");


   document.write("<h1>5. Perulangan Nested For (Bersarang 2 )  </h1>");
   string = "";
   for (i = 0; i < 5; i++) {
       for (x = 0; x <= i ; x++) {
          string += "*";
       }
       string += "<br>";
   }

   document.write(string)
   /* 
       Nested perulangan adalah perulangan didalam perulangan,
   */

