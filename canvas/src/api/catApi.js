class CatApi {  
  static getAllCats() {
    return fetch('http://uinames.com/api/?amount=25').then(response => {
      return response.json();
    }).catch(error => {
      return error;
    });
  }
}

export default CatApi;  