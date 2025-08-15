const _bs = [
    [2000, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2001, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2002, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2003, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2004, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2005, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2006, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2007, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2008, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
    [2009, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2010, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2011, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2012, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
    [2013, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2014, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2015, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2016, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
    [2017, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2018, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2019, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2020, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
    [2021, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2022, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
    [2023, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2024, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
    [2025, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2026, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2027, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2028, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2029, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30],
    [2030, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2031, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2032, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2033, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2034, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2035, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
    [2036, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2037, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2038, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2039, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
    [2040, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2041, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2042, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2043, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
    [2044, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2045, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2046, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2047, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
    [2048, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2049, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
    [2050, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2051, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
    [2052, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2053, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
    [2054, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2055, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2056, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30],
    [2057, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2058, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2059, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2060, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2061, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2062, 30, 32, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31],
    [2063, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2064, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2065, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2066, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
    [2067, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2068, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2069, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2070, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
    [2071, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2072, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
    [2073, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
    [2074, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
    [2075, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2076, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
    [2077, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
    [2078, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
    [2079, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2080, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
    [2081, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30],
    [2082, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
    [2083, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30],
    [2084, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30],
    [2085, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30],
    [2086, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
    [2087, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30],
    [2088, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30],
    [2089, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
    [2090, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30]
];

// Core conversion functions
function is_leap_year(year) {
    return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
}

function eng_to_nep(yy, mm, dd) {
    const month = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    const lmonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    const def_eyy = 1944;
    const def_nyy = 2000;
    const def_nmm = 9;
    const def_ndd = 17 - 1;
    let total_eDays = 0;
    let total_nDays = 0;
    let m = 0;
    let y = 0;
    let i = 0;
    let j = 0;

    for (i = 0; i < (yy - def_eyy); i++) {
        if (is_leap_year(def_eyy + i)) {
            for (j = 0; j < 12; j++) {
                total_eDays += lmonth[j];
            }
        } else {
            for (j = 0; j < 12; j++) {
                total_eDays += month[j];
            }
        }
    }

    for (i = 0; i < (mm - 1); i++) {
        if (is_leap_year(yy)) {
            total_eDays += lmonth[i];
        } else {
            total_eDays += month[i];
        }
    }
    total_eDays += dd;

    i = 0;
    j = def_nmm;
    total_nDays = def_ndd;
    m = def_nmm;
    y = def_nyy;

    while (total_eDays > 0) {
        const a = _bs[i][j];
        total_nDays++;
        if (total_nDays > a) {
            m++;
            total_nDays = 1;
            j++;
        }
        if (m > 12) {
            y++;
            m = 1;
        }
        if (j > 12) {
            j = 1;
            i++;
        }
        total_eDays--;
    }
    return {
        year: y,
        month: m,
        date: total_nDays
    };
}

function nep_to_eng(yy, mm, dd) {
    const def_eyy = 1943;
    const def_emm = 4;
    const def_edd = 14 - 1;
    const def_nyy = 2000;
    let total_eDays = 0;
    let total_nDays = 0;
    let m = 0;
    let y = 0;
    let i = 0;
    let k = 0;
    const month = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    const lmonth = [0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    for (i = 0; i < (yy - def_nyy); i++) {
        for (let j = 1; j <= 12; j++) {
            total_nDays += _bs[k][j];
        }
        k++;
    }

    for (let j = 1; j < mm; j++) {
        total_nDays += _bs[k][j];
    }
    total_nDays += dd;

    total_eDays = def_edd;
    m = def_emm;
    y = def_eyy;

    while (total_nDays > 0) {
        let a;
        if (is_leap_year(y)) {
            a = lmonth[m];
        } else {
            a = month[m];
        }
        total_eDays++;
        if (total_eDays > a) {
            m++;
            total_eDays = 1;
            if (m > 12) {
                y++;
                m = 1;
            }
        }
        total_nDays--;
    }
    return {
        year: y,
        month: m,
        date: total_eDays
    };
}

// DOM manipulation and event handlers
// Expose a public function to attach date converter to any AD/BS input pairs by their IDs
function attachDateConverter(adInputId, bsInputId) {
    const adDateInput = document.getElementById(adInputId);
    const bsDateInput = document.getElementById(bsInputId);

    if (!adDateInput || !bsDateInput) {
        console.warn('Date input elements not found:', adInputId, bsInputId);
        return;
    }

    const formatDate = (year, month, day) => {
        const paddedMonth = String(month).padStart(2, '0');
        const paddedDay = String(day).padStart(2, '0');
        return `${year}-${paddedMonth}-${paddedDay}`;
    };

    const handleDateInput = (inputField, otherInputField, converterFunction) => {
        let value = inputField.value.replace(/[^0-9]/g, '');
        let caretPos = inputField.selectionStart;

        if (value.length >= 4 && value[4] !== '-') {
            value = value.substring(0, 4) + '-' + value.substring(4);
            if (caretPos > 4) caretPos++;
        }
        if (value.length >= 7 && value[7] !== '-') {
            value = value.substring(0, 7) + '-' + value.substring(7);
            if (caretPos > 7) caretPos++;
        }

        inputField.value = value.substring(0, 10);
        inputField.setSelectionRange(caretPos, caretPos);

        if (inputField.value.length === 10) {
            const [year, month, day] = inputField.value.split('-').map(Number);
            if (isNaN(year) || isNaN(month) || isNaN(day)) {
                otherInputField.value = 'Invalid Date';
                return;
            }

            if (month < 1 || month > 12) {
                otherInputField.value = 'Invalid Date: Month must be between 1 and 12';
                return;
            }

            if (converterFunction === eng_to_nep && (day < 1 || day > 31)) {
                otherInputField.value = 'Invalid Date: Day must be between 1 and 31';
                return;
            }
            if (converterFunction === nep_to_eng && (day < 1 || day > 32)) {
                otherInputField.value = 'Invalid Date: Day must be between 1 and 32';
                return;
            }

            if (converterFunction === nep_to_eng && (year < 2000 || year > 2090)) {
                otherInputField.value = 'Invalid Date: Year must be between 2000 and 2090';
                return;
            }

            const monthDays = converterFunction === eng_to_nep
                ? (is_leap_year(year) ? [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31] : [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31])
                : _bs[year - 2000]?.slice(1);

            if (!monthDays || day < 1 || day > monthDays[month - 1]) {
                otherInputField.value = 'Invalid Date: Day is out of range for the given month';
                return;
            }

            try {
                const result = converterFunction(year, month, day);
                otherInputField.value = formatDate(result.year, result.month, result.date);
            } catch (e) {
                otherInputField.value = 'Invalid Date';
            }
        } else {
            otherInputField.value = '';
        }
    };

    adDateInput.addEventListener('keyup', (e) => {
        if (e.key !== 'Backspace' && e.key !== 'Delete') {
            handleDateInput(adDateInput, bsDateInput, eng_to_nep);
        }
    });

    bsDateInput.addEventListener('keyup', (e) => {
        if (e.key !== 'Backspace' && e.key !== 'Delete') {
            handleDateInput(bsDateInput, adDateInput, nep_to_eng);
        }
    });

    adDateInput.addEventListener('input', () => {
        if (!adDateInput.value) {
            bsDateInput.value = '';
        }
    });

    bsDateInput.addEventListener('input', () => {
        if (!bsDateInput.value) {
            adDateInput.value = '';
        }
    });
}

