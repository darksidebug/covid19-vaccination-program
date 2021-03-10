import { CreateObject } from "./FormData_Converter.js";
import { AddNode } from "./DOM-Manipulator.js";

export async function DisplayRecords(e){
    e.preventDefault();

    let table_name = document.getElementById('table-name').value;
    let button = document.getElementById('records-search-btn');
    button.disabled = true;
    button.innerHTML = "<span id='spinnerID' class='spinner-border' height='0.3rem'></span> Loading";

    let formdata = new FormData(this);
    let data = await CreateObject(formdata)
    let url = '/api/vaccination-records'
    let response = await fetch(url, {
        method: 'post',
        headers: {
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify(data)
    })

    response = await response.json();

    console.log(response);

    AddNode(response, table_name);

    button.disabled = false;
    button.innerText = "Search";
}
