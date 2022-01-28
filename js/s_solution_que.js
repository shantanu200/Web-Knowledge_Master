let nl = "\r\n";
let solutions = [
    {
        numb:1,
        ans:"(d) Seven elements",
        description:
        "There are seven numbers of elements in the open IoT architecture:"+nl+
        "1.Configuration and monitoring"+nl+
        "2.Cloud data storage"+nl+"3.Schedule"+nl+"4.Request definition"+nl+"5.Request presentation"+nl+"6.Service delivery and utility manager"+nl+"7.Sensor middleware (X-GSN)",
        title: "Open IOT Architecture",
        link:"https://www.opensourceforu.com/2019/03/openiot-enabling-the-convergence-of-iot-and-cloud-computing/"
    },
    {
        numb:2,
        ans:"(b) Cloud",
        description: "Cloud-based services provide a way for IoT devices to be connected to data."+nl+"For example: Just as the WWW (World Wide Web) runs on the Internet, so does IoT.",
        title: "IOT Cloud",
        link: "https://internetofthingsagenda.techtarget.com/info/getstarted/Internet-of-Things-IoT-Cloud"
    },
    {
        numb:3,
        ans:"(d) Short-range Wireless Network",
        description: "Short-range wireless networks have a very short range. This type of network is used for applications running in the local environment. The best example of this network is Wi-Fi and Bluetooth.",
        title: "IOT NETWORK",
        link: "http://iotfactory.eu/iot-knowledge-center/overview-of-iot-networks/"
    },
    {
        numb:4,
        ans:"(c) Long Protocol Wide Area Network",
        description: "The full form of the LPWAN is Low Power Wide Area Network. LPWAN is a type of wireless telecommunication, and it is specially designed for M2M (Machine to Machine) and IoT devices.",
        title: "LPWAN NETWORK",
        link: "https://internetofthingsagenda.techtarget.com/definition/LPWAN-low-power-wide-area-network"
    },
    {
        numb:5,
        ans:"(c) Interconnected",
        description: "An IoT network is a collection of interconnected devices that communicate with other devices without human involvement.",
        title: "IOT NETWORK",
        link: "http://iotfactory.eu/iot-knowledge-center/overview-of-iot-networks/"
    },
    {
        numb:6,
        ans:"(d) mq telemetry transport",
        description: "The full form of the MQTT is Message Queue Telemetry Transport. It is a lightweight messaging protocol that runs over the TCP / IP protocol.",
        title: "MQTT Protocol",
        link: "https://internetofthingsagenda.techtarget.com/definition/MQTT-MQ-Telemetry-Transport"
    },
    {
        numb:7,
        ans:"(a) Improve the usability and interoperability",
        description: "The main purpose of the Web of Things is to improve the usability and interoperability in IoT. Developing IoT Apps through WoT is much easier, faster, and less expensive.",
        title: "WOT[Web of Things]",
        link: "https://www.techopedia.com/definition/26834/web-of-things-wot"
    },
    {
        numb:8,
        ans:"Smart Meters",
        description: "Smart Grid is used to monitor the power supply. Consumers' data is collected using a smart grid, and that data is analyzed and distributed to the consumers. The real example of a smart grid device is a smart meter.",
        title: "Smart Grid in IOT",
        link: "https://cse.iitkgp.ac.in/~smisra/theme_pages/smartgrid/index.html"
    },
    {
        numb:9,
        ans:"(a) UART interface",
        description: "The fingerprint sensor uses a UART interface to store fingerprint data. It can be configured in 1:1 or 1:N mode to identify the person.",
        title: "UART Interface",
        link: "https://learn.sparkfun.com/tutorials/serial-communication/uarts"
    },
    {
        numb:10,
        ans:"(b) RETful API",
        description: "The RETful API allows the user to control the electronic components connected to the Intel Galileo Gen 2 board via HTTP requests.",
        title: "REST API",
        link: "https://www.redhat.com/en/topics/api/what-is-a-rest-api"
    },
    {
        numb:11,
        ans:"(c) Arduino",
        description: "The Arduino Uno is a hardware device that is based on the Microchip ATmega328P microcontroller.",
        title: "Arduino",
        link: "https://www.arduino.cc/en/guide/introduction"
    },
    {
        numb:12,
        ans:"(b) MM",
        description: "The MM bit defines the address bit in the control register.",
        title: "Control Register",
        link: "https://www.sciencedirect.com/topics/computer-science/control-register"
    },
    {
        numb:13,
        ans:"(c) High-level Data Link Control",
        description: "The full form of the HDLC is High level Data Link Control. It is a communication protocol. It is used to transmit data between nodes and data points.",
        title: "HDLC",
        link: "https://www.tutorialspoint.com/high-level-data-link-control-hdlc"
    },
    {
        numb:14,
        ans:"(c) Information and Communication Technology",
        description: "The full form of ICT is Information and Communication Technology. ICT is a multidimensional term for the IT sector that refers to all communication technologies, including the Internet, wireless networks, cell phones, computers, and software.",
        title: "ICT",
        link: "https://searchcio.techtarget.com/definition/ICT-information-and-communications-technology-or-technologies"
    },
    {
        numb:15,
        ans:"(b) 400 MHz",
        description: "The frequency of this board is 400 MHz. The Galileo gen 2 board frequency gives the speed of operation of the board. Therefore, the speed increases as the frequency increases",
        title: "Intel-Galileo-Gen-2-Board",
        link: "https://ark.intel.com/content/www/us/en/ark/products/83137/intel-galileo-gen-2-board.html"
    },
    {
        numb:16,
        ans:"(d) Internet-Assigned-Numbers-Authority",
        description: "The full form of IANA is Internet-Assigned-Numbers-Authority. It is an administrative function of the Internet that monitors the IP addresses and domain names.",
        title: "IANA",
        link: "https://whatis.techtarget.com/definition/IANA-Internet-Assigned-Numbers-Authority"
    },
    {
        numb:17,
        ans:"(c) 8883",
        description: "The standard port number of Secure MQTT is 8883, and it is registered in IANA for Secure MQTT.",
        title: "MQTT",
        link: "https://internetofthingsagenda.techtarget.com/definition/MQTT-MQ-Telemetry-Transport"
    },
    {
        numb:18,
        ans:"(a) 30 to 100 m",
        description: "The Z-Wave is a low-power Mac protocol designed especially for smart home and small business domains. It covers the range from 30 to 100 m.",
        title: "Z-Wave",
        link: "https://internetofthingsagenda.techtarget.com/definition/Z-Wave"
    },
    {
        numb:19,
        ans:"(c) Star Topology",
        description: "ZigBee Smart Energy is designed for a wide range of IoT applications. It supports a wide range of network topologies, such as star topology.",
        title: "ZigBee Smart Energy",
        link: "https://www.teldat.com/blog/zigbee-smart-energy-smart-metering-home-automation/"
    },
    {
        numb:20,
        ans:"(c) Capacitive touch sensor",
        description: "The capacitive touch sensors are widely used in portable devices such as cell phones. The main reason for this sensor development on the phone is low cost, durability, and design.",
        title: "Touch Sensor",
        link: "https://www.seeedstudio.com/blog/2019/12/31/what-is-touch-sensor-and-how-to-use-it-with-arduino/"
    },
    {
        numb:21,
        ans:"(b) JAVA",
        description: "GSN stands for Global Sensor Network. GSN works on JAVA language because JAVA language is portable in nature. The other language (such as C, C++, Python, and HTML) is not portable in nature.",
        title: "GSN",
        link: "https://core.ac.uk/download/pdf/147909225.pdf"
    },
    {
        numb:22,
        ans:"(b) Wi-Fi",
        description: "Short-range wireless networks have a very short range. This type of network is used for applications running in the local environment. Examples of this network are Wi-Fi and Bluetooth.",
        title: "Wireless Network",
        link: "https://iot4beginners.com/short-range-wireless-communication-technology-and-its-variants/"
    },
    {
        numb:23,
        ans:"(d) All of the above",
        description: "Characteristics of IOT are as follow:1.Connectivity 2.Sensing 3.Active Engagements 4.Scale 5.Dynamic Nature 6.Intelligence 7.Energy 8.Safety 9.Integration",
        title: "Characteristics of IOT",
        link: "https://www.educba.com/iot-features/"
    },
    {
        numb:24,
        ans:"(c) 2^32",
        description: "The two most common versions of IP in use today are Internet Protocol version 4 (IPv4) and Internet Protocol version 6 (IPv6). Both IPv4 and IPv6 addresses come from finite pools of numbers.For IPv4, this pool is 32-bits (232) in size and contains 4,294,967,296 IPv4 addresses. The IPv6 address space is 128-bits (2128) in size, containing 340,282,366,920,938,463,463,374,607,431,768,211,456 IPv6 addresses.",
        title: "IP ADDRESS",
        link: "https://www.ripe.net/about-us/press-centre/understanding-ip-addressing"
    },
    {
        numb:25,
        ans:"(b) IPV6",
        description: "IPSec operates in two different modes: Transport and Tunnel. In Transport (Host-to-Host) mode, only the payload is encrypted or authenticated. The original IPv6 header is used, followed by AH and ESP, and eventually the payload itself. In Tunnel (Gateway-to-Gateway or Gateway-to-Host) mode, the entire IPv6 packet is encrypted and authenticated. This packet is then encapsulated by a new IPv6 header",
        title: "IPv6 and IPSec",
        link: "https://www.redhat.com/sysadmin/ipv6-packets-and-ipsec"
    }

];
