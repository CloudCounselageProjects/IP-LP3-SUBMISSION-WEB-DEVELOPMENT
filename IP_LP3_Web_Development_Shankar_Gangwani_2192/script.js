let tndapi = document.querySelector("#tndapi");
console.log(tndapi);
fetch("http://localhost:5050")
  .then((apidata) => {
    //console.log(apidata.json());
    return apidata.json();
  })
  .then((actualdata) => {
    const mydata = actualdata;
    console.log(mydata);
    tndapi.innerHTML = mydata;
  })
  .catch((error) => {
    console.log(error);
  });
