email = /^[a-zA-Z.]+@[a-zA-Z]+\.[a-zA-Z.]{2}$/
 console.log(email.test("leady.putri@gmail.com"));

phone = /^[+62]+[0-9]{8,15}$/
console.log(phone.test("+628973245403"));

username = /^[a-zA-Z0-9]{5,9}$/
console.log(username.test("leady"));

pas = /^[a-zA-Z{1}0-9{1}@#{1}]{8}$/
console.log(password.test("Le@dy"));

