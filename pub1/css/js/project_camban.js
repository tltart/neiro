const mainDiv = document.getElementsByClassName('panel-body panel-kanban')[0]


const divs = [];

let count = 0;

let isPage = { isPage: true };
let isPage_1 = { isPage: true };
let isPage_2 = { isPage: true };

let stages = [];


let get = async (changeStages) => {
    let ff = await fetch(`https://test.neiros.ru/ajax/getstage`)
        .then(res => res.json());
    return changeStages(ff)
}

const changeStages = (prop) => {
    stages = prop.stages;
    for (let i = 0; i < stages.length; i++) {
        let buf = {}
        let cat = document.querySelector(`[data-cat="${stages[i]}"]`);
        let elem = document.createElement("div");
        elem.className = "sortable-list connectList agile-list ui-sortable";
        elem.id = `todo_${stages[i]}`;
        buf[`${stages[i]}`] = elem;
        buf.id = stages[i];
        buf.totalPage = 1;
        divs.push(buf);
        cat.appendChild(elem);
    }
    ss(divs, count);
}


const ss = async (all, coun) => {

    for (let i = 0; i < all.length; i++) {
        if (all[i].totalPage > coun) {
            let { res, total } = await fetch(`https://test.neiros.ru/ajax/apidashboard?stage_id=${all[i].id}&page=${coun}`)
                .then(resp => resp.json())
                .then(respo => ({ res: respo.projects, total: respo.lastPage }));
                divs[i].totalPage = total;

            for (let b = 0; b < res.length; b++) {
                let parEl = document.getElementById(`todo_${all[i].id}`)
                let elem = document.createElement("div");
                elem.className = "agile-item info-element";
                elem.id = `todo_${res[b].id}`
                elem.innerHTML = `<div class="pipeline_leads__top-block">
                <div class="pipeline_leads__linked-entities"> ${res[b].fio} </div>
                <div class="pipeline_leads__top-date">${res[b].created_at}</div>

            </div>

            <div class="row agile-detail">
                <div class="col-md-12">
                    <a href="#" onclick="openclinfo(${res[b].id})">


                        Форма с сайта ${res[b].phone}
                    </a>
                </div>
            </div>`
                parEl.appendChild(elem)
            }

        }

    }

}



function checkPosition() {
    const height = document.body.offsetHeight
    const screenHeight = window.innerHeight
    const scrolled = window.scrollY
    const threshold = height - screenHeight / 20
    const position = scrolled + screenHeight;
    if (position >= threshold) {
        ss(divs, count);
        count++;
    }
}

function throttle(callee, timeout) {
    let timer = null

    return function perform(...args) {
        if (timer) return

        timer = setTimeout(() => {
            callee(...args)

            clearTimeout(timer)
            timer = null
        }, timeout)
    }
}

(() => {
    window.addEventListener("scroll", throttle(checkPosition, 100))
    window.addEventListener("resize", throttle(checkPosition, 100))
})();

get(changeStages);
