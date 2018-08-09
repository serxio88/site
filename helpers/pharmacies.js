
exports.preparePharmacyData = (pharmacy) => {
    let work_time = [];
    if (pharmacy.work_time) {
        work_time = pharmacy.work_time.map(workTime => {
            const workTimeParts = workTime.split(' ');
            return {
                weekdays: workTimeParts[0],
                time: workTimeParts[1],
            }
        });
    }

    if(!pharmacy.drugs) {
        pharmacy.drugs = [];
    }

    if (!pharmacy.rate) {
        pharmacy.rate = 0;
    }

    if (!pharmacy.ratings) {
        pharmacy.ratings = [];
    }

    if (!pharmacy.opinion) {
        pharmacy.opinion = {
            service: 0,
            priceQuality: 0
        }
    }

    return {
        ...pharmacy,
        work_time,
    };
};