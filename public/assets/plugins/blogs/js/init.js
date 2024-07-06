// 1: splitter
Splitting();
// -------------------------------------

const navigation = document.querySelector(".navigation");
if (navigation) {
  navigation.addEventListener("click", () => {
    navigation.classList.toggle("active");
  });
}

initCursor();

function initCursor() {
  // 1: create instance
  var kinet = new Kinet({
    acceleration: 0.06,
    friction: 0.2,
    names: ["x", "y"],
  });

  var circle = document.getElementById("cursor");

  // 1.2: set handler on kinet tick event
  kinet.on("tick", function (instances) {
    circle.style.transform = `translate3d(${instances.x.current}px, ${
      instances.y.current
    }px, 0) rotateX(${instances.x.velocity / 2}deg) rotateY(${
      instances.y.velocity / 2
    }deg)`;
  });

  // 1.3: call kinet animate method on mousemove
  document.addEventListener("mousemove", function (event) {
    kinet.animate("x", event.clientX - window.innerWidth / 2);
    kinet.animate("y", event.clientY - window.innerHeight / 2);
  });
} // end function

// -------------------------------------------

$(".js-parallax").jarallax({
  speed: 0.9,
  type: "scroll",
});
