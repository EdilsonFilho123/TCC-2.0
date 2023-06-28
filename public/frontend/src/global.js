import Vue from 'vue'

export const userKey = '__user'
export const baseApiUrl = 'http://localhost:8000'

export function showError(e) {
    var obj;
    if(e && e.response && e.response.data) obj = { msg: e.response.data }
    else if(typeof e === 'string') obj = { msg: e }

    Vue.toasted.global.defaultError(obj)
}

export default { baseApiUrl, showError, userKey }