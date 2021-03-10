import { CreateUser, UpdatePass, StartVaccination } from "./UserAsync.js";
import { DisplayRecords } from "./RecordAsync.js";

document.getElementById('updatepassform').addEventListener('submit', UpdatePass);
document.getElementById('start-vaccination-form').addEventListener('submit', StartVaccination);

document.getElementById('adduserform').addEventListener('submit', CreateUser);
document.getElementById('records-form').addEventListener('submit', DisplayRecords);



