      $(function() {
        // Configure toastr to show the error messages
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        $('form').on('submit', function(event) {
            let hasError = false;

            // Reset all validation styles
            $('.form-control, .form-select').removeClass('is-invalid');

            // Check required input fields
            $(this).find('input[required], select[required]').each(function() {
                if (!$(this).val() || $(this).val() === null) {
                    $(this).addClass('is-invalid');
                    hasError = true;
                }
            });

            // If there's an error, prevent form submission and show a toastr message
            if (hasError) {
                event.preventDefault(); // Stop the form from submitting
                toastr.error('Please fill out all required fields marked with an asterisk (*).', 'Validation Error');
            } else {
                // Form is valid, you can add your submission logic here
                // For now, we'll just show a success message
                toastr.success('Form submitted successfully!', 'Success');
                // If you want to actually submit the form, remove the line above and the event.preventDefault() call
            }
        });

        // Optional: Remove error state when the user starts typing/selecting
        $('.form-control, .form-select').on('input change', function() {
            if ($(this).val()) {
                $(this).removeClass('is-invalid');
            }
        });

        /////////////////////////////////////////////////
        var state = 0;
        var data = [
            // state 1
            [
              ["Bhojpur", ["aamchowk", "arun", "bhojpur", "hatuwagadhi", "pauwadungma", "ramprasadrai", "salpasilichho", "shadananda", "tyamkemaiyum"]],
              ["Dhankuta", ["chhathar jorpati", "choubise", "dhankutamun", "mahalaxmi dhankuta", "pakhribas", "sangurigadhi", "shahidbhumi"]],
              ["Ilam", ["chulachuli", "deumai", "ilam", "maijogmai", "maimun", "mansebung", "phakphokthum", "rong", "sandakpur", "suryodaya"]],
              ["Jhapa", ["arjundhara", "bahradashi", "bhadrapur", "birtamod", "buddhashanti", "damak", "gauradaha", "gaurigunj", "haldibari", "jhapa", "kachankawal", "kamal", "kankai", "mechinagar", "shivasatakshi"]],
              ["Khotang", ["aiselukharka", "barahapokhari", "diprung", "halesituwachung", "jantedhunga", "kepilasgadhi", "khotehang", "rawa besi", "rupakot majhuwagadhi", "sakela"]],
              ["Morang", ["belbari", "biratnagar", "budhiganga morang", "dhanapalthan", "gramthan", "jahada", "kanepokhari", "katahari", "kerabari", "letang", "miklajung morang", "pathari shanishchare", "rangeli", "ratuwamai", "sunawarshi", "sundarharaicha", "urlabari"]],
              ["Okhaldhunga", ["champadevi", "chishankhugadhi", "khijidemba", "likhu okhaldhunga", "manebhanjyang", "molung", "siddhicharan", "sunkoshi okhaldhunga"]],
              ["Panchthar", ["hilihang", "kummayak", "miklajung panchthar", "phalelung", "phalgunanda", "phidim", "tumwewa", "yangwarak panchthar"]],
              ["Sankhuwasabha", ["bhotkhola", "chainpur", "chichila", "dharmadevi", "khandbari", "madi sankhuwasabha", "makalu", "panchkhapan", "savapokhari", "silichong"]],
              ["Solukhumbu", ["dudhkoshi", "khumbu pasanglhamu", "likhu pike", "mahakulung", "nechasalyan", "solududhkunda", "sotang", "thulung dudhkoshi"]],
              ["Sunsari", ["baraha", "barju", "bhokraha", "dewanganj", "dharan", "duhabi", "gadhi", "harinagara", "inaruwa", "itahari", "koshi", "ramdhuni"]],
              ["Taplejung", ["aathrai tribeni", "maiwakhola", "meringden", "mikwakhola", "phaktanglung", "phungling", "sidingba", "sirijangha", "yangwarak taplejung"]],
              ["Tehrathum", ["aathrai", "chhathar", "laligurans", "menchhayayem", "myanglung", "phedap"]],
              ["Udayapur", ["belaka", "chaudandigadhi", "katari", "rautamai", "sunkoshi udayapur", "tapli", "triyuga", "udayapurgadhi"]]
            ],
              // state 2
            [
              ["Bara", ["aadarsha kotwal", "baragadhi", "bishrampur", "devtal", "jeetpur simara", "kalaiya", "karaiyamai", "kolhabi", "mahagadimai", "nijgadh", "pachrauta", "parwanipur", "pheta", "prasauni", "simraungadh", "suwarna"]],
              ["Dhanusa", ["aurahi dhanusha", "bateshwor", "bideha", "dhanauji", "dhanushadhammun", "ganeshmancharnath", "hansapur", "janaknandini", "janakpur", "kamala", "kshireshwornath", "laxminiya", "mithila", "mithilabihari", "mukhiyapatti musaharmiya", "nagrain", "sabaila", "shahidnagar"]],
              ["Mahottari", ["aurahi mahottari", "balwa", "bardibas", "bhagaha", "ekdara", "gaushala", "jaleshwor", "loharpatti", "mahottari", "manrashiswa", "matihani", "pipra", "ramgopalpur", "samsi", "sonma"]],
              ["Parsa", ["bahudarmai", "bindabasinimun", "birgunj", "chhipaharmai", "dhobini", "jagarnathpur", "jira bhawani", "kalikamai", "pakaha mainpur", "parsagadhi", "paterwa sugauli", "pokhariya", "sakhuwa prasauni", "thori"]],
              ["Rautahat", ["baudhimai", "brindawan", "chandrapur", "dewahi gonahi", "durga bhagawati", "gadhimai", "garuda", "gaur", "gujara", "ishnath", "katahariya", "madhav narayan", "maulapur", "paroha", "phatuwabijaypur", "rajdevi", "rajpur rautahat", "yamunamai"]],
              ["Saptari", ["agnisair krishna sawaran", "balanbihul", "bishnupur saptari", "bodebarsain", "chhinnamasta", "dakneshwori", "hanumannagar kankalini", "kanchanrup", "khadak", "mahadeva", "rajbiraj", "rajgadh", "rupani", "saptakoshi", "shambhunath", "surunga", "tilathi koiladi", "tirahut"]],
              ["Sarlahi", ["bagmati sarlahi", "balra", "barhathwa", "basbariya", "bishnu", "brahmapuri", "chakraghatta", "chandranagar", "dhankaul", "godaita", "harion", "haripur", "haripurwa", "ishworpur", "kaudena", "kawilasi", "lalbandi", "malangwa", "parsa", "ramnagar"]],
              ["Siraha", ["anarma", "aurahi siraha", "bariyapatti", "bhagwanpur", "bishnupur siraha", "dhangadhi mai", "golbazar", "kalyanpur", "karjanha", "lahan", "laxmipur patari", "mirchaiya", "narahamun", "nawarajpur", "sakhuwanankarkatti", "siraha", "sukhipur"]]
            ],
              // state 3
            [
              ["Bhaktapur", ["bhaktapur", "changunarayan", "madhyapurthimi", "suryabinayak"]],
              ["Chitwan", ["bharatpur", "ichchhakamana", "kalika chitwan", "khairahani", "madi chitwan", "rapti chitwan", "ratnanagar"]],
              ["Dhading", ["benighat rorang", "dhunibeshi", "gajuri", "galchhi", "gangajamuna", "jwalamukhi", "khaniyabas", "neelakantha", "netrawati", "rubivalley", "siddhalek", "thakre", "tripurasundari dhading"]],
              ["Dolakha", ["baiteshwor", "bhimeshwor", "bigu", "gaurishankar", "jiri", "kalinchowk", "melung", "shailung", "tamakoshi"]],
              ["Kathmandu", ["budhanilkantha", "chandragiri", "dakshinkali", "gokarneshwor", "kageshwori manohara", "kathmandu", "kirtipur", "nagarjun", "shankharapur", "tarakeshwor kathmandu", "tokha"]],
              ["Kavrepalanchowk", ["banepa", "bethanchowk", "bhumlu", "chaurideurali", "dhulikhel", "khanikhola", "mahabharat", "mandandeupur", "namobuddha", "panauti", "panchkhal", "roshi", "temal"]],
              ["Lalitpur", ["bagmati lalitpur", "godawari lalitpur", "konjyosom", "lalitpur", "mahalaxmi lalitpur", "mahankal"]],
              ["Makawanpur", ["bagmati makawanpur", "bakaiya", "bhimphedi", "hetauda", "indrasarowar", "kailash", "makawanpurgadhi", "manahari", "raksirang", "thaha"]],
              ["Nuwakot", ["belkotgadhi", "bidur", "dupcheshwor", "kakani", "kispang", "likhu nuwakot", "meghang", "panchakanya", "shivapuri", "suryagadhi", "tadi", "tarakeshwor nuwakot"]],
              ["Ramechhap", ["doramba", "gokulganga", "khandadevi", "likhu ramechhap", "manthali", "ramechhap", "sunapati", "umakunda"]],
              ["Rasuwa", ["gosaikunda", "kalika rasuwa", "naukunda", "parbatikunda", "uttargaya"]],
              ["Sindhuli", ["dudhauli", "ghyanglekh", "golanjor", "hariharpurgadhi", "kamalamai", "marin", "phikkal", "sunkoshi sindhuli", "tinpatan"]],
              ["Sindhupalchowk", ["bahrabise", "balephi", "bhotekoshi", "chautara sangachowkgadhi", "helambu", "indrawati", "jugal", "lisankhupakhar", "melamchi", "panchpokhari thangpal", "sunkoshi sindhupalchowk", "tripurasundari sindhupalchowk"]]
            ],
            // state 4
            [
              ["Baglung", ["badigad", "baglung", "bareng", "dhorpatan", "galkot", "jaimini", "kathekhola", "nisikhola", "tamankhola", "tarakhola"]],
              ["Gorkha", ["aarughat", "ajirkot", "barpak sulikot", "bhimsen", "chumanuwri", "dharche", "gandaki", "gorkha", "palungtar", "shahid lakhan", "siranchowk"]],
              ["Kaski", ["annapurna kaski", "machhapuchhre", "madi kaski", "pokhara", "rupa"]],
              ["Lamjung", ["besishahar", "dordi", "dudhpokhari", "kwholasothar", "madhyanepal", "marsyangdi", "rainas", "sundarbazar"]],
              ["Manang", ["chame", "manang ngisyang", "narpa bhumi", "nasonmun"]],
              ["Mustang", ["bahragau muktichhetra", "dalome", "gharapjhong", "lomanthang", "thasang"]],
              ["Myagdi", ["annapurna myagdi", "beni", "dhawalagiri", "malika myagdi", "mangala", "raghuganga"]],
              ["Nawalparasi East", ["binayi tribeni", "bulingtar", "bungdikali", "devchuli", "gaindakot", "hupsekot", "kawasoti", "madhyabindu"]],
              ["Parbat", ["bihadi", "jaljala", "kushma", "mahashila", "modi", "paiyun", "phalewas"]],
              ["Syangja", ["aandhikhola", "arjunchaupari", "bheerkot", "biruwa", "chapakot", "galyang", "harinas", "kaligandaki syangja", "phedikhola", "putalibazar", "waling"]],
              ["Tanahun", ["aanbookhaireni", "bandipur", "bhanu", "bhimad", "devghat", "ghiring", "myagde", "rishing", "shuklagandaki", "vyas"]]
            ],
              // state 5
            [
              ["Arghakhanchi", ["bhumikasthan", "chhatradev", "malarani", "panini", "sandhikharka", "shitaganga"]],
              ["Banke", ["baijanath", "duduwa", "janaki banke", "khajura", "kohalpur", "narainapur", "nepalgunj", "raptisonari"]],
              ["Bardiya", ["badhaiyatal", "bansgadhi", "barbardiya", "geruwa", "gulariya", "madhuwan", "rajapur", "thakurbaba"]],
              ["Dang", ["babai", "bangalachuli", "dangisharan", "gadhawa", "ghorahi", "lamahi", "rajpur dang", "rapti dang", "shantinagar", "tulsipur"]],
              ["Gulmi", ["chandrakot", "chhatrakot", "dhurkot", "gulmi darbar", "isma", "kaligandaki gulmi", "madane", "malika gulmi", "musikot gulmi", "resunga", "ruru", "satyawati"]],
              ["Kapilvastu", ["banganga", "bijaynagar", "buddhabhumi", "kapilvastu", "krishnanagar", "maharajgunj", "mayadevi kapilvastu", "shivraj", "shuddhodhan kapilvastu", "yasodhara"]],
              ["Nawalparasi West", ["bardghat", "palhinandan", "pratappur", "ramgram", "sarawal", "sunwal", "susta"]],
              ["Palpa", ["baganaskali", "mathagadhi", "nisdi", "purbakhola", "rainadevi chhahara", "rambha", "rampur", "ribdikot", "tansen", "tinau"]],
              ["Pyuthan", ["airawati", "gaumukhi", "jhimruk", "mallarani", "mandavi", "naubahini", "pyuthan", "sarumarani", "swargadwari"]],
              ["Rolpa", ["duikholi", "lungri", "madi rolpa", "rolpa", "runtigadhi", "sukidaha", "sunchhahari", "sunilsmriti", "thabang", "triveni rolpa"]],
              ["Rukum East", ["bhume", "putha uttarganga", "sisne"]],
              ["Rupandehi", ["butwal", "devdaha", "gaidahawa", "kanchan", "kotahimai", "lumbini sanskritik", "marchawari", "mayadevi rupandehi", "omsatiya", "rohini", "sainamaina", "sammarimai", "shuddhodhan rupandehi", "siddharthanagar", "siyari", "tilottama"]]
            ],
            // state 6
            [
              ["Dailekh", ["aathabis", "bhagawatimai", "bhairabi", "chamunda bindrasaini", "dullu", "dungeshwor", "gurans", "mahabu", "narayan", "naumule", "thantikandh"]],
              ["Dolpa", ["chharka tangsong", "dolpobuddha", "jagdulla", "kaike", "mudkechula", "she phoksundo", "thulibheri", "tripurasundari dolpa"]],
              ["Humla", ["adanchuli", "chankheli", "kharpunath", "namkha", "sarkegad", "simkot", "tajakot"]],
              ["Jajarkot", ["barekot", "bheri", "chhedagad", "junichaande", "kushe", "shibalaya", "tribeninalgaad"]],
              ["Jumla", ["chandannath", "guthichaur", "hima", "kankasundari", "patarasi", "sinja", "tatopani", "tila"]],
              ["Kalikot", ["kalika kalikot", "khandachakra", "mahawai", "narharinath", "pachaljharana", "palata", "raskot", "sanni triveni", "tilagufa"]],
              ["Mugu", ["chhayanath rara", "khatyad", "mugum karmarong", "soru"]],
              ["Rukum West", ["aathbiskot", "banphikot", "chaurjahari", "musikot rukum", "sani bheri", "triveni rukum"]],
              ["Salyan", ["bagchaur", "bangad kupinde", "chhatreshwori", "darma", "kalimati", "kapurkot", "kumakh malika", "shaarada", "siddha kumakh", "triveni salyan"]],
              ["Surkhet", ["barahatal", "bheriganga", "birendranagar", "chaukune", "chingad", "gurbhakot", "lekbeshi", "panchapuri", "simta"]]
            ],
            // state 7
            [
              ["Achham", ["bannigadhi jaygadh", "chaurpati", "dhakari", "kamalbazar", "mangalsen", "mellekh", "panchadewal binayak", "ramaroshan", "sanfebagar", "turmakhad"]],
              ["Baitadi", ["dasharathchand", "dilasaini", "dogdakedar", "melauli", "pancheshwor", "patan", "purchaudi", "shivanath", "sigas", "sunarya"]],
              ["Bajhang", ["bitthadchir", "bungal", "chhabis pathivera", "durgathali", "jayaprithvi", "kanda", "kedarasyu", "khaptadchhanna", "masta", "surma", "talkot", "thalara"]],
              ["Bajura", ["badimalika", "budhiganga bajura", "budhinanda", "chhededaha", "gaumul", "himali", "jagganath", "swamikartik", "triveni bajura"]],
              ["Dadeldhura", ["aalital", "ajayameru", "amargadhi", "bhageshwor", "ganyapadhura", "navadurga", "parshuram"]],
              ["Darchula", ["apihimal", "duhun", "lekam", "mahakali darchula", "malikarjun", "marma", "naugad", "shailyashikhar", "vyans"]],
              ["Doti", ["aadarsha", "badikedar", "bogatan", "dipayal silgadhi", "jorayal", "kisingh", "purbichauki", "sayal", "shikhar"]],
              ["Kailali", ["bardgoriya", "bhajani", "chure", "dhangadhi", "gauriganga", "ghodaghodi", "godawari kailali", "janaki kailali", "joshipur", "kailari", "lamkichuha", "mohanyal", "tikapur"]],
              ["Kanchanpur", ["bedkot", "belauri", "beldandi", "bheemdatta", "dodhara chandani", "krishnapur", "laljhadi", "punarbas", "shuklaphanta"]]
            ]
          ];
      
          // Helper to populate districts and cities
          function populateDistricts(stateSelector, districtSelector, citySelector) {
            $(stateSelector).change(function() {
              state = parseInt($(this).prop('selectedIndex') - 1);
              $(districtSelector + ' option,' + citySelector + ' option').remove();
              $(districtSelector).append(new Option("-- District --"));
              if (state >= 0 && data[state]) {
                for (var i = 0; i < data[state].length; i++) {
                  $(districtSelector).append(new Option(data[state][i][0]));
                }
              }
            });
            $(districtSelector).change(function() {
                var district = parseInt($(this).prop('selectedIndex') - 1);
                $(citySelector + ' option').remove();
                $(citySelector).append(new Option(" -- VDC/Municipality -- "));
                if (state >= 0 && district >= 0 && data[state] && data[state][district]) {
                  for (var j = 0; j < data[state][district][1].length; j++) {
                    var capitalizedLocality = capitalizeEachWord(data[state][district][1][j]);
                    $(citySelector).append(new Option(capitalizedLocality));
                  }
                }
            });
          }
      
          // Capitalize helper
          function capitalizeEachWord(string) {
            return string.replace(/\b\w/g, function(match) {
              return match.toUpperCase();
            });
          }
      
          // Apply for both Permanent and Current Address
          populateDistricts("#pstate", "#pdistrict", "#pcity");
          populateDistricts("#cstate", "#cdistrict", "#ccity");
      });
      
      
      // Handle the same address checkbox
      $("#sameAddress").change(function () {
        if (this.checked) {
        // Copy state
        const pStateIndex = $("#pstate").prop("selectedIndex");
        $("#cstate").prop("selectedIndex", pStateIndex).trigger("change");
        
        // Delay to ensure districts are populated
        setTimeout(function () {
          const pDistrictIndex = $("#pdistrict").prop("selectedIndex");
          $("#cdistrict").prop("selectedIndex", pDistrictIndex).trigger("change");
        
            // Delay again for city
          setTimeout(function () {
            const pCityIndex = $("#pcity").prop("selectedIndex");
            $("#ccity").prop("selectedIndex", pCityIndex);
          }, 100); // delay to wait for cities
        }, 100); // delay to wait for districts
        // Copy locality, ward no, and landmark
        $("#clocality").val($("#plocality").val());
        $("#cward").val($("#pward").val());
        $("#clandmark").val($("#plandmark").val());
        } else {
        // Reset current address if checkbox is unchecked
          $("#cstate").prop("selectedIndex", 0).trigger("change");
          setTimeout(() => {
            $("#cdistrict").prop("selectedIndex", 0).trigger("change");
            setTimeout(() => {
              $("#ccity").prop("selectedIndex", 0);
            }, 100);
          }, 100);
          $("#clocality").val("");
          $("#cward").val("");
          $("#clandmark").val("");
        }
      });
