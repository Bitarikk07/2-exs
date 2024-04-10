<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./assets/css/style.css" rel="stylesheet" />
</head>

<body class="bg-[#FEFEFE]">
  <header class="flex items-center py-[1.5rem] max-w-[80rem] m-auto justify-between">
    <a href="./home.php" class="text-[#52B4C1] text-[2rem] font-bold">NFTs Art</a>
    <nav class="flex items-center gap-[3.5rem]">
      <a href="./colection.php" class="text-[#171717] font-semibold text-[1rem]">Collection</a>
      <a href="#" class="text-[#171717] font-semibold text-[1rem]">Road Map</a>
      <a href="" class="text-[#171717] font-semibold text-[1rem]">Our Clans</a>
      <a href="#" class="text-[#171717] font-semibold text-[1rem]">FAQ</a>
    </nav>
    <div class="flex items-center gap-[2rem]">
      <a href=""><img src="/img/icons/Avatar.svg" alt="" /></a>
      <a href="" class="py-[1rem] px-[2.5rem] bg-[#DCF06B] rounded-[2rem] text-[#171717] font-semibold">Create</a>

      <form action="" method="POST">
        <button class="btn btn-outline-danger btn-sm" type="submit">
          Logout
        </button>
      </form>
    </div>
  </header>
  <section>
    <div class="flex max-w-[80rem] m-auto pt-[3.5rem] pb-[7.5rem] flex-col items-start gap-[3rem]">
      <h1 class="text-[3rem] text-[#090909] font-bold">Get Popular Collection</h1>
      <div class="w-full flex flex-col items-start gap-[2.5rem]">
        <div class="flex flex-col items-start w-full">
          <div class="flex items-center w-full justify-between">
            <form action="" class="flex items-center gap-[0.75rem] w-[57.4%]">
              <label for="text" class="flex items-center gap-[0.5rem] w-full bg-[#F9F9F9] py-[0.75rem] pl-[1rem] rounded-[1rem] border border-[#E9EBED] pr-[1rem]">
                <button> <img src="./assets/img/icons/search.svg" alt=""></button>

                <input type="text" name="text" id="text" class="placeholder:text-[#8E8E8E] outline-none bg-transparent" placeholder="Search collections">
              </label>
            </form>
            <div class="flex items-center">
              <select class="py-[0.75rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[1rem] px-[1rem] outline-none" id="blockchains" name="blockchains" required="">
                <option id="check-box1" value="0">
                  All blockchains</option>
                <option id="check-box1" value="0">
                  NOTCOIN</option>
                <option id="check-box1" value="0">
                  SWEAR</option>
                <option id="check-box2" value="1">
                  ART</option>
              </select>
            </div>
            <div class="py-[0.75rem] flex items-center gap-[0.5rem] px-[1rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[1rem]">
              <h2>Sort by</h2>
              <img src="./assets/img/post/sort.svg" alt="">
            </div>
            <div class="flex items-center gap-[0.25rem] bg-[#F9F9F9] rounded-[1rem] p-[0.38rem]">
              <a href="./colection.php" class="p-[0.62rem] rounded-[0.5rem] bg-[#DCF06B]"><img src="./assets/img/post/four.svg" alt=""></a>
              <a href="./colection-2.php" class="p-[0.62rem] rounded-[0.5rem]"><img src="./assets/img/post/six.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="flex items-start gap-[3.5rem]">
          <div class="flex flex-col items-start gap-[0.75rem]">
            <h2 class="text-[#151517] font-bold">Categories</h2>
            <div class="flex flex-col items-start w-[15.6rem] gap-[0.75rem]">
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Top </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Art </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Collectibles </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Domain Names </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Music </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Photography </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Collectibles </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
              <div class="flex items-center w-full justify-between">
                <h2 class="text-[#151517] font-semibold"> Sports </h2>
                <div class="checkbox-wrapper-44">
                  <label class="toggleButton">
                    <input type="checkbox">
                    <div>
                      <svg viewBox="0 0 44 44" fill="#fffff">
                        <path transform="translate(-2.000000, -2.000000)" d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"></path>
                      </svg>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="w-[55.9rem] flex flex-col gap-[2.5rem] items-center">
            <div class="grid grid-profile">
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>
              <div class="p-[0.75rem] w-full h-[17rem]  flex flex-col items-start gap-[1rem] bg-grid-card">
                <div class="flex flex-col w-full items-start gap-[0.5rem]">
                  <div class="flex flex-col items-start gap-0">
                    <h2 class="text-[#21204A] font-bold">Human Life Collection</h2>
                    <p class="text-[#9D9BB9] font-normal">@Lincoln</p>
                  </div>
                  <div class="flex w-full justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Collections</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">348</h2>
                      </div>
                      <div class="flex flex-col items-start gap-[0.25rem]">
                        <p class="text-[#999999] text-[0.75rem]">Followers</p>
                        <h2 class="text-[0.875rem] text-[#101010] font-semibold">1.5K</h2>
                      </div>
                    </div>
                    <button class="py-[0.5rem] px-[1.5rem] bg-[#DCF06B] rounded-[2rem]">
                      Follow
                    </button>
                  </div>
                </div>
                <div class="parent">
                  <div class="div1 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/card.png');"> </div>
                  <div class="div2 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/2.png');"> </div>
                  <div class="div3 bg-no-repeat bg-cover bg-bottom bg-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/3.png');"> </div>
                  <div class="div4 bg-no-repeat bg-cover bg-bottom bg-center   flex justify-center items-center w-full rounded-[0.5rem]" style="background-image: url('./assets/img/5.png');">
                    <h2 class="text-[1.25rem] text-[#FFFFFF] font-semibold">+12</h2>
                  </div>
                </div>
              </div>

            </div>
            <div class="flex items-center gap-[0.5rem] bg-[#F9F9F9] border border-[#E9EBED] rounded-[0.75rem] px-[1rem] py-[0.75rem]">
              <img src="./assets/img/load.svg" alt="">
              <h2>Loading</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full flex py-[5rem] justify-center flex-col text-center items-center gap-[3rem]">
      <h2 class="text-[3rem] text-[#090909] font-bold">Our Top collectors</h2>
      <marquee scrollamount="20">
        <div class="flex gap-[2rem]">
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/1.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/2.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/3.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/4.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/5.svg" alt="">
          </a>
        </div>
        <!-- Добавьте другие элементы списка здесь -->
      </marquee>
      <marquee scrollamount="35">
        <div class="flex gap-[2rem]">
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/1.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/2.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/3.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/4.svg" alt="">
          </a>
          <a href="#" class="py-[1rem] flex items-center px-[1.56rem] rounded-[2rem] border border-[#F0F0F0]">
            <img src="./assets/img/icons-footer/5.svg" alt="">
          </a>
        </div>
        <!-- Добавьте другие элементы списка здесь -->
      </marquee>
    </div>

  </section>
  <footer class="py-[5rem] max-w-[80rem] m-auto flex items-center justify-between">
    <div class="flex flex-col gap-[1.5rem] w-[16.25rem]">
      <h2 class="text-[#171717] text-[2rem] font-bold">NFTs Art</h2>
      <h2 class="text-[#171717] text-[1.5rem] font-bold">
        Create sell, and collect NFT digital art
      </h2>
    </div>
    <div class="flex flex-col items-end gap-[1.5rem]">
      <nav class="flex items-center gap-[2rem]">
        <a href="#" class="text-[#171717] font-semibold text-[1rem]">Collection</a>
        <a href="#" class="text-[#171717] font-semibold text-[1rem]">Road Map</a>
        <a href="#" class="text-[#171717] font-semibold text-[1rem]">Our Clans</a>
        <a href="#" class="text-[#171717] font-semibold text-[1rem]">FAQ</a>
      </nav>
      <div class="flex items-center gap-[0.75rem]">
        <a href="#"><img src="/img/icons/dicord.svg" alt="" /></a>
        <a href="#"><img src="/img/icons/x.svg" alt="" /></a>
        <a href="#"><img src="/img/icons/facebook.svg" alt="" /></a>
      </div>
      <p class="text-[#8E8E8E] text-[0.75rem] font-normal">
        2022. all right Reserved.
      </p>
    </div>
  </footer>
</body>

</html>