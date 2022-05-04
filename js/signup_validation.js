var reg_form = document.getElementById('reg_form')
var employee_no = document.getElementById('employee_no').value;
var department = document.getElementById('department').value;
var Name = document.getElementById('name').value;
var house_no = document.getElementById('house_no').value;
var barangay = document.getElementById('barangay').value;
var municipality = document.getElementById('municipality').value;
var region = document.getElementById('region').value;
var province = document.getElementById('province').value;
var country = document.getElementById('country').value;
var postal_code = document.getElementById('postal_code').value;
var email = document.getElementById('email').value;
var contact_num = document.getElementById('contact_num').value;
var telephone_num = document.getElementById('telephone_num').value;
var email_2 = document.getElementById('email_2').value;
var password = document.getElementById('password').value;
var confirm_password = document.getElementById('confirm_password').value;
var errorElement = document.getElementById('error');

reg_form.addEventListener('submit', e => {                                
    let messages = []
    if(employee_no.value === '' || employee_no == null) {
        messages.push('required')
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', '                                 )
    }
});
