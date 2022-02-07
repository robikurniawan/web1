 
 
 
 
 function fetchData() {

     fetch("http://newsapi.org/v2/everything?q=tesla&from=2022-01-04&sortBy=publishedAt&apiKey=e1b96c454bf0480bab1e69a69d883700")
         .then(response => {
             return response.json();
         })
         .then(jsondata => renderData(jsondata));
 }

 function renderData(data) {
     for (const q of data.articles) {

         const content = document.querySelector('#newsLists');
         const title = document.createElement('h4');
         const desc = document.createElement('p');
         const author = document.createElement('p');
         const link = document.createElement('p');
         const separator = document.createElement('hr');

         title.innerHTML = q.title;
         desc.innerHTML = q.description;
         author.innerHTML = "Authors : " + q.author + "";
         link.innerHTML = "Source : " + q.url;

         content.append(title);
         content.append(desc);
         content.append(author);
         content.append(link);
         content.append(separator);
     }
 }

 fetchData()