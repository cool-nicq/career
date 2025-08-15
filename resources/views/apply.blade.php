<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form | IGI Prudential Insurance</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <style>
        :root {
            --primary-color: #e53935;
        }
        body {
            background-color: #f4f4f4;
        }
        .form-section-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .required-asterisk {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-danger text-white text-center">
                <h1 class="display-6">Job Application Form</h1>
            </div>
            <div class="card-body p-md-5">
                
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <form action="{{ route('job.store', $vacancy->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <p class="text-muted fst-italic text-end"><span class="required-asterisk">*</span> indicates a required field</p>
                    
                    <h4 class="form-section-title">Application Details</h4>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label for="appliedPosition" class="form-label">Applied Position<span class="required-asterisk">*</span></label>
                            <input type="text" class="form-control" id="appliedPosition" name="appliedPosition" value="{{ $vacancy->title }}" readonly required>
                        </div>
                        <div class="col-md-4">
                            <label for="appliedBranch" class="form-label">Applied Branch<span class="required-asterisk">*</span></label>
                            <select id="appliedBranch" name="appliedBranch" class="form-select" required>
                                <option selected disabled>-- Select Branch --</option>
                                <option>Aabukhaireni</option>
                                <option>Achham</option>
                                <option>Arghakhanchi</option>
                                <option>Baglung</option>
                                <option>Banepa</option>
                                <option>Bardibas</option>
                                <option>Bhairahawa</option>
                                <option>Bhaktapur</option>
                                <option>Biratnagar</option>
                                <option>Biratchowk</option>
                                <option>Birgunj</option>
                                <option>Birauta</option>
                                <option>Birtamod</option>
                                <option>Bouddha</option>
                                <option>Butwal</option>
                                <option>Chandranigahapur</option>
                                <option>Dadeldhura</option>
                                <option>Damak</option>
                                <option>Damauli</option>
                                <option>Dang</option>
                                <option>Dhangadhi</option>
                                <option>Dhading</option>
                                <option>Dhalkebar</option>
                                <option>Dharan</option>
                                <option>Dolakha</option>
                                <option>Dumre</option>
                                <option>Gaighat</option>
                                <option>Gaushala</option>
                                <option>Gongabu</option>
                                <option>Gorkha</option>
                                <option>Head Office</option>
                                <option>Hetauda</option>
                                <option>Hetauda 2</option>
                                <option>Ilam</option>
                                <option>Imadol</option>
                                <option>Inaruwa</option>
                                <option>Itahari</option>
                                <option>Janakpur</option>
                                <option>Jawalakhel</option>
                                <option>Jeetpur</option>
                                <option>Kalaiya</option>
                                <option>Kalanki</option>
                                <option>Kamaladi</option>
                                <option>Kawasoti</option>
                                <option>Khusibu</option>
                                <option>Kirtipur</option>
                                <option>Kohalpur</option>
                                <option>Koteshwor</option>
                                <option>Kuleshwor</option>
                                <option>Lahan</option>
                                <option>Lalbandi</option>
                                <option>Lamahi</option>
                                <option>Lamjung</option>
                                <option>Lamki</option>
                                <option>Lekhnath</option>
                                <option>Lokanthali</option>
                                <option>Maharajgunj</option>
                                <option>Mahendranagar</option>
                                <option>Manigram</option>
                                <option>Narayangadh</option>
                                <option>Narayangadh 2</option>
                                <option>Nepalgunj</option>
                                <option>New Road</option>
                                <option>Nuwakot</option>
                                <option>Okhaldhunga</option>
                                <option>Parasi</option>
                                <option>Pokhara</option>
                                <option>Rampur</option>
                                <option>Simara</option>
                                <option>Solukhumbu</option>
                                <option>Surkhet</option>
                                <option>Syangja</option>
                                <option>Tandi</option>
                                <option>Teku</option>
                                <option>Thapathali</option>
                                <option>Tulsipur</option>
                            </select>
                        </div>
                    </div>
                    
                    <h4 class="form-section-title">Personal Information</h4>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label for="first_name" class="form-label">First Name<span class="required-asterisk">*</span></label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="last_name" class="form-label">Last Name<span class="required-asterisk">*</span></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email Address<span class="required-asterisk">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required pattern="^[a-zA-Z0-9][a-zA-Z0-9._%+\-]*[a-zA-Z0-9]@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address">
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Mobile Number<span class="required-asterisk">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required pattern="^(98|97)\d{8}$" title="Mobile number must start with 98 or 97 and be 10 digits long">
                        </div>
                        <div class="col-md-4">
                            <label for="dateOfBirthBS" class="form-label">Date of Birth (B.S.)<span class="required-asterisk">*</span></label>
                            <input type="tel" class="form-control" id="dateOfBirthBS" name="dateOfBirthBS" required placeholder="YYYY-MM-DD" >
                        </div>
                        <div class="col-md-4">
                            <label for="dateOfBirthAD" class="form-label">Date of Birth (A.D.)<span class="required-asterisk">*</span></label>
                            <input type="tel" class="form-control" id="dateOfBirthAD" name="dateOfBirthAD" required placeholder="YYYY-MM-DD">
                        </div>
                        <div class="col-md-4">
                            <label for="nationalitySelect" class="form-label">Nationality<span class="required-asterisk">*</span></label>
                            <select name="nationality" id="nationalitySelect" class="form-select" required>
                                <option value="" selected disabled>Select nationality</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Bhutanese">Bhutanese</option>
                                <option value="Indian">Indian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="maritalStatus" class="form-label">Marital Status<span class="required-asterisk">*</span></label>
                            <select id="maritalStatus" name="maritalStatus" class="form-select" required>
                                <option value="" selected disabled>Select status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Separated</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender<span class="required-asterisk">*</span></label>
                            <select id="gender" name="gender" class="form-select" required>
                                <option value="" selected disabled>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="citizenshipNo" class="form-label">Citizenship No.</label>
                            <input type="text" class="form-control" id="citizenshipNo" name="citizenshipNo">
                        </div>
                    </div>
                    
                    <h4 class="form-section-title">Address Information</h4>
                    <div class="row g-3 mb-4">
                        <div class="col-md-12 border rounded p-3">
                            <label class="form-label fs-5">Permanent Address<span class="required-asterisk">*</span></label>
                            <div class="row g-3 mt-1">
                                <div class="col-4">
                                    <label for="pstate" class="form-label">State<span class="required-asterisk">*</span></label>
                                    <select id="pstate" name="pstate" class="form-select" required>
                                        <option disabled selected>-- Province --</option>
                                        <option value="1">Koshi Pradesh</option>
                                        <option value="2">Madhesh Pradesh</option>
                                        <option value="3">Bagmati Pradesh</option>
                                        <option value="4">Gandaki Pradesh</option>
                                        <option value="5">Lumbini Pradesh</option>
                                        <option value="6">Karnali Pradesh</option>
                                        <option value="7">SudurPaschim Pradesh</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="pdistrict" class="form-label">District<span class="required-asterisk">*</span></label>
                                    <select class="form-select" id="pdistrict" name="pdistrict" required>
                                        <option disabled selected>-- Select District --</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="pcity" class="form-label">VDC/Municipality<span class="required-asterisk">*</span></label>
                                    <select class="form-select" id="pcity" name="pcity" required>
                                        <option disabled selected>-- Select VDC/Municipality --</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="plocality" class="form-label">Locality/Tole<span class="required-asterisk">*</span></label>
                                    <input type="text" class="form-control" id="plocality" name="plocality" required>
                                </div>
                                <div class="col-4">
                                    <label for="pward" class="form-label">Ward No<span class="required-asterisk">*</span></label>
                                    <input type="number" class="form-control" id="pward" name="pward" required>
                                </div>
                                <div class="col-4">
                                    <label for="plandmark" class="form-label">Landmark<span class="required-asterisk">*</span></label>
                                    <input type="text" class="form-control" id="plandmark" name="plandmark" required placeholder="e.g., Near City Park">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 border rounded p-3">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <span>Current Address<span class="required-asterisk">*</span></span>
                                <div>
                                    <input class="form-check-input" type="checkbox" id="sameAddress">
                                    <label for="sameAddress" class="ms-1">Same as Permanent Address</label>
                                </div>
                            </div>
                            <div class="row g-3 mt-1">
                                <div class="col-4">
                                    <label for="cstate" class="form-label">State<span class="required-asterisk">*</span></label>
                                    <select id="cstate" name="cstate" class="form-select" required>
                                        <option disabled selected>-- Province --</option>
                                        <option value="1">Koshi Pradesh</option>
                                        <option value="2">Madhesh Pradesh</option>
                                        <option value="3">Bagmati Pradesh</option>
                                        <option value="4">Gandaki Pradesh</option>
                                        <option value="5">Lumbini Pradesh</option>
                                        <option value="6">Karnali Pradesh</option>
                                        <option value="7">SudurPaschim Pradesh</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="cdistrict" class="form-label">District<span class="required-asterisk">*</span></label>
                                    <select class="form-select" id="cdistrict" name="cdistrict" required>
                                        <option disabled selected>-- Select District --</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="ccity" class="form-label">VDC/Municipality<span class="required-asterisk">*</span></label>
                                    <select class="form-select" id="ccity" name="ccity" required>
                                        <option disabled selected>-- Select VDC/Municipality --</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="clocality" class="form-label">Locality/Tole<span class="required-asterisk">*</span></label>
                                    <input type="text" class="form-control" id="clocality" name="clocality" required>
                                </div>
                                <div class="col-4">
                                    <label for="cward" class="form-label">Ward No<span class="required-asterisk">*</span></label>
                                    <input type="number" class="form-control" id="cward" name="cward" required>
                                </div>
                                <div class="col-4">
                                    <label for="clandmark" class="form-label">Landmark<span class="required-asterisk">*</span></label>
                                    <input type="text" class="form-control" id="clandmark" name="clandmark" required placeholder="e.g., Near City Park">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="form-section-title">Academic & Professional Details</h4>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label for="degree" class="form-label">Degree</label>
                            <select name="academic_degree_type" class="form-select" id="degree" required>
                                <option value="" disabled selected>Select an Degree</option>
                                <optgroup label="Certificates and Diplomas">
                                    <option value="certificate">Certificate</option>
                                    <option value="diploma">Diploma</option>
                                    <option value="undergraduate_certificate">Undergraduate Certificate</option>
                                    <option value="higher_national_certificate">Higher National Certificate (HNC)</option>
                                    <option value="higher_national_diploma">Higher National Diploma (HND)</option>
                                    <option value="foundation">Foundation Degree</option>
                                    <option value="associate">Associate Degree</option>
                                </optgroup>
                                <optgroup label="Undergraduate Degree">
                                    <option value="bachelor">Bachelor’s Degree</option>
                                </optgroup>
                                <optgroup label="Postgraduate Degrees">
                                    <option value="graduate_certificate">Graduate Certificate</option>
                                    <option value="graduate_diploma">Graduate Diploma</option>
                                    <option value="postgraduate_certificate">Postgraduate Certificate</option>
                                    <option value="postgraduate_diploma">Postgraduate Diploma</option>
                                    <option value="master">Master’s Degree</option>
                                </optgroup>
                                <optgroup label="Doctoral and Post-Doctoral Studies">
                                    <option value="professional_doctorate">Professional Doctorate (e.g., MD, JD, DDS)</option>
                                    <option value="doctoral">Doctoral Degree (Ph.D., Ed.D., etc.)</option>
                                    <option value="postdoctoral">Postdoctoral Studies</option>
                                </optgroup>
                                <optgroup label="Other">
                                    <option value="honorary">Honorary Degree</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="highestQualification" class="form-label">Highest Completed Qualification<span class="required-asterisk">*</span></label>
                            <input type="text" class="form-control mb-2" id="highestQualification" name="highestQualification" placeholder="e.g., Bachelor of Computer Science" required>
                        </div>
                        <div class="col-md-4">
                            <label for="institutionName" class="form-label">Institution Name<span class="required-asterisk">*</span></label>
                            <input type="text" class="form-control mb-2" id="institutionName" name="institutionName" placeholder="e.g., XYZ University" required>
                        </div>
                        <div class="col-md-4">
                            <label for="grading" class="form-label">Grading</label>
                            <input type="text" class="form-control" id="grading" name="grading" placeholder="e.g., First Division">
                        </div>
                        <div class="col-md-4">
                            <label for="completedYearBS" class="form-label">Completed Year (B.S.)<span class="required-asterisk">*</span></label>
                            <input type="number" class="form-control" id="completedYearBS" name="completedYearBS" placeholder="e.g., 2079" required>
                        </div>
                        <div class="col-md-4">
                            <label for="expectedSalary" class="form-label">Expected Salary (Per Month)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-rupee-sign"></i></span>
                                <input type="tel" class="form-control" id="expectedSalary" name="expectedSalary" required>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="form-section-title">Working Experiences</h4>
                    <p class="text-muted">Please list your most recent experience first.</p>
                    <div class="border rounded p-3 mb-4">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="orgName" class="form-label">Organization Name</label>
                                <input type="text" class="form-control" id="orgName" name="orgName">
                            </div>
                            <div class="col-md-5">
                                <label for="orgType" class="form-label">Organization Category</label>
                                <select id="orgType" name="orgType" class="form-select">
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="agriculture_forestry_fishing">Agriculture, Forestry, Fishing, and Hunting</option>
                                    <option value="arts_entertainment_recreation">Arts, Entertainment, and Recreation</option>
                                    <option value="construction">Construction</option>
                                    <option value="cooperative">Cooperative</option>
                                    <option value="education">Education</option>
                                    <option value="educational_institution">Educational Institution</option>
                                    <option value="finance_insurance">Finance and Insurance</option>
                                    <option value="financial_institution">Financial Institution</option>
                                    <option value="government_ministry_department">Government Ministry/Department</option>
                                    <option value="healthcare_social_assistance">Healthcare and Social Assistance</option>
                                    <option value="health_organization">Health Organization</option>
                                    <option value="hospitality_tourism">Hospitality and Tourism</option>
                                    <option value="information_communication">Information and Communication</option>
                                    <option value="ingo">INGO (International Non-Governmental Organization)</option>
                                    <option value="insurance_institution">Insurance Company</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="mining_quarrying_oil_gas">Mining, Quarrying, and Oil & Gas Extraction</option>
                                    <option value="ngo">NGO (Non-Governmental Organization)</option>
                                    <option value="nonprofit_charitable">Nonprofit and Charitable Organizations</option>
                                    <option value="other">Other</option>
                                    <option value="partnership_firm">Partnership Firm</option>
                                    <option value="private_limited_company">Private Limited Company</option>
                                    <option value="professional_scientific_technical">Professional, Scientific, and Technical Services</option>
                                    <option value="public_administration">Public Administration</option>
                                    <option value="public_limited_company">Public Limited Company</option>
                                    <option value="real_estate_rental_leasing">Real Estate and Rental/Leasing</option>
                                    <option value="retail_trade">Retail Trade</option>
                                    <option value="sole_proprietorship">Sole Proprietorship</option>
                                    <option value="state_owned_enterprise">State-Owned Enterprise</option>
                                    <option value="transportation_warehousing">Transportation and Warehousing</option>
                                    <option value="utilities">Utilities</option>
                                    <option value="waste_management_environmental">Waste Management and Environmental Services</option>
                                    <option value="wholesale_trade">Wholesale Trade</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="positionTitle" class="form-label">Position Title</label>
                                <input type="text" class="form-control" id="positionTitle" name="positionTitle">
                            </div>
                            <div class="col-md-3">
                                <label for="joinDateIn" class="form-label">Date In</label>
                                <select class="form-select" id="joinDateIn" name="joinDateIn" required>
                                    <option disabled selected>Select Date</option>
                                    <option value="1">A.D.</option>
                                    <option value="2">B.S.</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="joiningDate" class="form-label">Joining Date</label>
                                <input type="text" class="form-control" id="joiningDate" name="joiningDate" placeholder="YYYY-MM-DD" required disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="clearanceDate" class="form-label">Clearance Date</label>
                                <input type="text" class="form-control" id="clearanceDate" name="clearanceDate" placeholder="YYYY-MM-DD" disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="totalExperience" class="form-label">Total years of experience</label>
                                <input type="text" class="form-control disabled" id="totalExperience" name="totalExperience" disabled readonly>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="form-section-title">Attachments to Upload (6MB max)</h4>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="cvFile" class="form-label">Curriculum Vitae<span class="required-asterisk">*</span></label>
                            <input class="form-control" type="file" id="cvFile" name="cv_path" required accept=".pdf,.doc,.docx">
                        </div>
                        <div class="col-md-6">
                            <label for="coverLetterFile" class="form-label">Cover Letter<span class="required-asterisk">*</span></label>
                            <input class="form-control" type="file" id="coverLetterFile" name="cover_letter_path" required accept=".pdf,.doc,.docx">
                        </div>
                        <div class="col-md-6">
                            <label for="qualificationFile" class="form-label">Highest Completed Qualification<span class="required-asterisk">*</span></label>
                            <input class="form-control" type="file" id="qualificationFile" name="qualificationFile" required accept=".pdf,.jpeg,.jpg,.png">
                        </div>
                        <div class="col-md-6">
                            <label for="photoFile" class="form-label">PP Size Photo<span class="required-asterisk">*</span></label>
                            <input class="form-control" type="file" id="photoFile" name="photoFile" required accept=".jpg,.png,.jpeg">
                        </div>
                        <div class="col-md-6">
                            <label for="citizenshipFile" class="form-label">Citizenship<span class="required-asterisk">*</span></label>
                            <input class="form-control" type="file" id="citizenshipFile" name="citizenshipFile" accept=".pdf,.jpeg,.jpg,.png">
                        </div>
                        <div class="col-md-6">
                            <label for="otherFiles" class="form-label">Other Attachments</label>
                            <input class="form-control" type="file" id="otherFiles" name="otherFiles" multiple accept=".pdf,.jpeg,.jpg,.png,.docx,.doc">
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 col-6 mx-auto mt-5">
                        <button class="btn btn-danger btn-lg" type="submit">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('js/nepal-state-district-vdcmun.js') }}"></script>
    <script src="{{ asset('js/date-converter.js') }}"></script>
    <script>
      $(document).ready(function() {
        // Prevent form submission in sandboxed environment
        $('#jobApplicationForm').on('submit', function(e) {
          e.preventDefault();
          toastr.error('Form submission is disabled in this environment due to sandbox restrictions.');
        });

        // Same as Permanent Address functionality
        $('#sameAddress').on('change', function() {
          if (this.checked) {
            $('#cstate').val($('#pstate').val());
            $('#cdistrict').val($('#pdistrict').val());
            $('#ccity').val($('#pcity').val());
            $('#clocality').val($('#plocality').val());
            $('#cward').val($('#pward').val());
            $('#clandmark').val($('#plandmark').val());
          } else {
            $('#cstate, #cdistrict, #ccity, #clocality, #cward, #clandmark').val('');
          }
        });

        // File size validation (6MB max)
        $('input[type="file"]').on('change', function() {
          const maxSize = 6 * 1024 * 1024; // 6MB in bytes
          if (this.files[0] && this.files[0].size > maxSize) {
            toastr.error('File size exceeds 6MB limit.');
            this.value = '';
          }
        });

        if (document.getElementById('dateOfBirthAD') && document.getElementById('dateOfBirthBS')) {
        attachDateConverter('dateOfBirthAD', 'dateOfBirthBS');
        }

        // joinDateIn change event
        $('#joinDateIn').on('change', function() {
          const selectedValue = $(this).val();
          if (selectedValue) {
            // Perform actions based on the selected value
            $('#joiningDate').prop('disabled', false);
            $('#clearanceDate').prop('disabled', false);
            $('#joiningDate').val('');
            $('#clearanceDate').val('');
            $('#totalExperience').val('');
            if (selectedValue === "1") {
              $('label[for="joiningDate"]').text('Joining Date (A.D.)');
              $('label[for="clearanceDate"]').text('Clearance Date (A.D.)');
              $('#joiningDate, #clearanceDate').off('change').on('change', function() {
                const joinDate = $('#joiningDate').val();
                const clearDate = $('#clearanceDate').val();
                if (joinDate && clearDate) {
                  const start = new Date(joinDate);
                  const end = new Date(clearDate);
                  if (!isNaN(start) && !isNaN(end) && end >= start) {
                    const diffYears = (end - start) / (1000 * 60 * 60 * 24 * 365.25);
                    $('#totalExperience').val(diffYears.toFixed(1) + ' years');
                  } else {
                    $('#totalExperience').val('');
                  }
                } else {
                  $('#totalExperience').val('');
                }
              });
            } else if (selectedValue === "2") {
              
              function bsDaysDifference(joiningId, clearanceId, resultId) {
                const joiningInput = document.getElementById(joiningId);
                const clearanceInput = document.getElementById(clearanceId);
                const resultElem = resultId ? document.getElementById(resultId) : null;

                function parseBS(bsStr) {
                    if (!bsStr || bsStr.length !== 10) return null;
                    const [y, m, d] = bsStr.split('-').map(Number);
                    if (isNaN(y) || isNaN(m) || isNaN(d)) return null;
                    if (y < 2000 || y > 2090) return null;
                    if (m < 1 || m > 12) return null;
                    const monthDays = _bs[y - 2000]?.slice(1);
                    if (!monthDays || d < 1 || d > monthDays[m - 1]) return null;
                    return { y, m, d };
                }

                function bsToDays(bs) {
                    let days = 0;
                    for (let i = 0; i < bs.y - 2000; i++) {
                        for (let j = 1; j <= 12; j++) days += _bs[i][j];
                    }
                    for (let j = 1; j < bs.m; j++) days += _bs[bs.y - 2000][j];
                    days += bs.d;
                    return days;
                }

                function updateDiff() {
                    const bs1 = parseBS(joiningInput.value);
                    const bs2 = parseBS(clearanceInput.value);
                    if (!bs1 || !bs2) {
                        if (resultElem) resultElem.textContent = '';
                        return;
                    }
                    const diff = Math.abs(bsToDays(bs2) - bsToDays(bs1));
                    if (resultElem) resultElem.textContent = diff;
                    return diff;
                }

                joiningInput.addEventListener('input', updateDiff);
                clearanceInput.addEventListener('input', updateDiff);

                // Initial calculation
                updateDiff();
            }
              
            }
            
          }
        });
        
        function formatDateInput(val) {
          // Remove non-digits
          let v = val.replace(/\D/g, '');
          if (v.length > 4) v = v.slice(0, 4) + '-' + v.slice(4);
          if (v.length > 7) v = v.slice(0, 7) + '-' + v.slice(7, 9);
          return v.slice(0, 10);
        }

        function validateMonthDay(input) {
          const parts = input.value.split('-');
          if (parts.length >= 2) {
            let mm = parseInt(parts[1], 10);
            if (mm > 12) {
              parts[1] = '12';
            }
          }
          if (parts.length === 3) {
            let dd = parseInt(parts[2], 10);
            if (dd > 32) {
              parts[2] = '32';
            }
          }
          input.value = parts.join('-');
        }

        $('#joiningDate, #clearanceDate, #dateOfBirthBS, #dateOfBirthAD').on('input', function() {
          this.value = formatDateInput(this.value);
        }).on('blur', function() {
          validateMonthDay(this);
        });

      });
    </script>
</body>
</html>