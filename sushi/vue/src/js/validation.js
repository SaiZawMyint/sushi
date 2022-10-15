
const accountinformationData = {
    step1: [
        'firstName','lastName','city','region','postal','phoneNumber'
    ]
}

export function validateAccount(setting = {
    step: 0,
    data: {},
    validate: callback
}){
    let data = {}
    let msg = []
    if(setting.step == 1){
        
        for(let x of accountinformationData.step1){
            if(!x in setting.data){
                msg.push(`Fail to continue`)
            }else{
                if(setting.data[x] == null || setting.data[x].trim().length == 0){
                    msg.push({
                        field: x,
                        msg: `Please fill ${formatCamelCase(x)}!`
                    })
                }else{
                    if(x == 'postal' || x == 'phoneNumber'){
                        if(/\D/.test(setting.data[x])){
                            msg.push({
                                field: x,
                                msg: `${formatCamelCase(x)} must be a number!`
                            })
                        }else{
                            if(x == 'postal' && setting.data[x].length < 5){
                                msg.push({
                                    field: x,
                                    msg: `Invalid ${formatCamelCase(x)}!`
                                })
                            }
                            if(x == 'phoneNumber' && setting.data[x].length < 10){
                                msg.push({
                                    field: x,
                                    msg: `Invalid ${formatCamelCase(x)}!`
                                })
                            }
                        }
                    }
                    if(x == 'region'){
                        if(setting.data[x] == '0'){
                            msg.push({
                                field: x,
                                msg: `Please choose ${formatCamelCase(x)}!`
                            })
                        }
                    }
                }
                
            }
        }
    }
    data = msg.length > 0 ? parseData(msg) : {success: true}
    setting.validate(data)
}
export function parseData(data=[]){
    let result = {}
    data.forEach(d=>{
        result[d.field] = d.msg
    })
    return result
}
export function formatCamelCase(text){
    const result = text.replace(/([A-Z])/g, " $1");
    return result.charAt(0).toUpperCase() + result.slice(1);
}