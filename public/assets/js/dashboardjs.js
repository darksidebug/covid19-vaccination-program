
document.getElementById('dashboard-btn').addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById('start-vaccination-form').reset();
    displayElement('dashboard');
})


document.getElementById('changepass-btn').addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById('updatepassform').reset();
    displayElement('update-password')
})

document.getElementById('records-btn').addEventListener('click', (e)=>{
    e.preventDefault();

    displayElement('records')
})

document.getElementById('adduser').addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById('adduserform').reset();
    displayElement('add-user');
})





function displayElement(ElementId){
    let nodes = document.getElementById('maincontent').children;
    for(let x = 0 ; x < nodes.length; x++){
        nodes[x].style.display = 'none';
    }

    document.getElementById(ElementId).style.display = 'block';
}
