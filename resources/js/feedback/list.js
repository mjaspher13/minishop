import axios from "axios";
import * as Config from "../../react/config";
import Swal from "sweetalert2";
import React from "react";
import ReactDOM from "react-dom";
import Helper from '../helper';
import * as Common from "../../react/lang/en/common";


/**
 * On Document Load
 */
$(function () {
    Helper.generateDataTable("feedback_table", true, true, true, true, Common.PLEASE_SELECT_MERCHANT);
    Helper.contentLoader('.content-loader');
});

document.querySelector(".table-responsive").addEventListener("click", (event) => {
    let btnEvent = event;
    let btnDelete = btnEvent.target;
    let dataId;

    if (btnDelete.classList.contains("btnDelete")) {
        btnEvent.preventDefault();
        dataId = btnDelete.getAttribute("data-id");

        Swal.fire({
            title: "Are you sure you want to delete?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, Delete it!",
            cancelButtonText: "No, Keep it"
        }).then((swalRes) => {
            if (swalRes.value) {
                axios.delete(Config.APP_URL + "/feedback/" + dataId)
                    .then((res) => {
                        Swal.fire(
                            "Deleted!",
                            "Entry has been deleted!",
                            "success"
                        ).then(() => {
                            Helper.removeFromTable(dataId, "#feedback_table");
                        });
                    });
            }
        });
    } else {
        if (btnDelete.parentElement.classList.contains("btnDelete")) {
            btnEvent.preventDefault();
            dataId = btnDelete.parentElement.getAttribute("data-id");

            Swal.fire({
                title: "Are you sure you want to cancel?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Delete it!",
                cancelButtonText: "No, Keep it"
            }).then((swalRes) => {
                if (swalRes.value) {
                    axios.delete(Config.APP_URL + "/feedback/" + dataId)
                        .then((res) => {
                            Swal.fire(
                                "Deleted!",
                                "Entry has been deleted!",
                                "success"
                            ).then(() => {
                                Helper.removeFromTable(dataId, "#feedback_table");
                            });
                        });
                }
            });
        }
    }
});

/**
 * columns construction
 * @type {*[]}
 */
const columns = [{
        title: "Name",
        data: "name"
    },
    {
        title: "Email",
        data: "email"
    },
    {
        title: "Mobile",
        data: "mobile"
    },
    {
        title: "Date Received",
        data: "created_at"
    },
    {
        title: "Actions",
        data: function (data) {
            return `<div class="icon-button-demo">
                    <a href="${Config.APP_URL}/feedback/${data.id}/view" 
                        class="btn btn-info btn-xs waves-effect">
                        <i class="material-icons">mode_edit</i>
                        <span>View</span>
                    </a>
                    <a href="#" 
                        class="btn btn-danger btn-xs waves-effect btnDelete" 
                        data-id="${data.id}">
                        <i class="material-icons">delete_forever</i>
                        <span>DELETE</span>
                    </a>
                </div>`
        }
    }
];
