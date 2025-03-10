import { Functions } from '../../functions.js';

/**
 * @link https://docs.phpmyadmin.net/en/latest/config.html#console-settings
 */
export const Config = {
    /**
     * @type {boolean}
     */
    StartHistory: false,
    /**
     * @type {boolean}
     */
    AlwaysExpand: false,
    /**
     * @type {boolean}
     */
    CurrentQuery: true,
    /**
     * @type {boolean}
     */
    EnterExecutes: false,
    /**
     * @type {boolean}
     */
    DarkTheme: false,
    /**
     * @type {'info'|'show'|'collapse'}
     */
    Mode: 'info',
    /**
     * @type {number}
     */
    Height: 92,
    /**
     * @type {boolean}
     */
    GroupQueries: false,
    /**
     * @type {'exec'|'time'|'count'}
     */
    OrderBy: 'exec',
    /**
     * @type {'asc'|'desc'}
     */
    Order: 'asc',

    /**
     * @param {Object} data
     * @return {void}
     */
    init: function (data) {
        this.StartHistory = !!data.StartHistory;
        this.AlwaysExpand = !!data.AlwaysExpand;
        this.CurrentQuery = data.CurrentQuery !== undefined ? !!data.CurrentQuery : true;
        this.EnterExecutes = !!data.EnterExecutes;
        this.DarkTheme = !!data.DarkTheme;
        this.Mode = data.Mode === 'show' || data.Mode === 'collapse' ? data.Mode : 'info';
        this.Height = data.Height > 0 ? Number(data.Height) : 92;
        this.GroupQueries = !!data.GroupQueries;
        this.OrderBy = data.OrderBy === 'time' || data.OrderBy === 'count' ? data.OrderBy : 'exec';
        this.Order = data.Order === 'desc' ? 'desc' : 'asc';
    },

    /**
     * @param {'StartHistory'|'AlwaysExpand'|'CurrentQuery'|'EnterExecutes'|'DarkTheme'|'Mode'|'Height'|'GroupQueries'|'OrderBy'|'Order'} key
     * @param {boolean|string|number} value
     * @return {void}
     */
    set: function (key, value) {
        this[key] = value;
        Functions.configSet('Console/' + key, value);
    },

    /**
     * Used for update console config
     *
     * @return {void}
     */
    update: function () {
        this.set('AlwaysExpand', !!document.getElementById('consoleOptionsAlwaysExpandCheckbox').checked);
        this.set('StartHistory', !!document.getElementById('consoleOptionsStartHistoryCheckbox').checked);
        this.set('CurrentQuery', !!document.getElementById('consoleOptionsCurrentQueryCheckbox').checked);
        this.set('EnterExecutes', !!document.getElementById('consoleOptionsEnterExecutesCheckbox').checked);
        this.set('DarkTheme', !!document.getElementById('consoleOptionsDarkThemeCheckbox').checked);
        /* Setting the dark theme of the console*/
        const consoleContent = document.getElementById('pma_console').querySelector('.content');
        if (this.DarkTheme) {
            consoleContent.classList.add('console_dark_theme');
        } else {
            consoleContent.classList.remove('console_dark_theme');
        }
    }
};
