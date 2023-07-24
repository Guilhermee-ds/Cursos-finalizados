import "./styles.css";


const API_BASE_URL = "https://api.github.com/orgs/facebook/repos";
const PAGE_SIZE = 10;
let PAGE = 1;


let canaFetch = true;

const reposContainer = document.getElementById('repos-container');

reposContainer.addEventListener('scroll',handscroll);

function handscroll() {
    
}