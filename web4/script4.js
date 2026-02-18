function checkEmail(email) {
    let regex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  
    let message = document.getElementById("message");
  
    if (regex.test(email)) {
      message.style.color = "black";
      message.textContent = "Адрес правильный";
    } else {
      message.style.color = "black";
      message.textContent = "Адрес неправильный";
    }
  }
  
  let colorChanged = false;
  
  function changeColor() {
    let body = document.body;
    if (colorChanged) {
      body.style.backgroundColor = "white";
    } else {
      body.style.backgroundColor = "lightblue";
    }
    colorChanged = !colorChanged;
  }
  