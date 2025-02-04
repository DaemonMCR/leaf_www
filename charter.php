<?php
$title = "LeafOS Charter";
include 'includes/header.php';
include 'includes/nav.php';
?>

<body>
    <article class="charter">

    <!-- Title Section -->
    <h1 style="text-align: center; font-weight: bold; text-decoration: margin-bottom: 20px;">
        LeafOS Charter
    </h1>

    <p>Welcome to the LeafOS Device Support Requirements. This document enumerates the requirements that must be met in order for devices to be deemed ship ready for LeafOS releases, beginning with Android Oreo.
        To be considered ready, device maintainers MUST meet the requirements presented in this document, including any documents incorporated via reference.
    </p>
    <p>The use of “MUST”, “MUST NOT”, “REQUIRED”, “SHALL”, “SHALL NOT”, “SHOULD”, “SHOULD NOT”, “RECOMMENDED”, “MAY”, and “OPTIONAL” is per the IETF standard defined in RFC2119.</p>
    <h3 id="table-of-contents">Table of Contents</h3>
    <ul>
        <li><a href="#device-ownership">Device ownership</a></li>
        <li>
        <a href="#attaining-exceptions">Attaining exceptions</a>
        <ul>
            <li><a href="#process">Process</a></li>
        </ul>
        </li>
        <li>
        <a href="#hardware-support">Hardware Support</a>
        <ul>
            <li><a href="#audio">Audio</a></li>
            <li><a href="#ril">RIL</a></li>
            <li><a href="#encryption">Encryption</a></li>
            <li><a href="#wi-fi">Wi-Fi</a></li>
            <li><a href="#usb">USB</a></li>
            <li><a href="#gps">GPS</a></li>
            <li><a href="#bluetooth">Bluetooth</a></li>
            <li><a href="#camera">Camera</a></li>
            <li><a href="#video-recording">Video Recording</a></li>
            <li><a href="#codecs">Codecs</a></li>
            <li><a href="#display">Display</a></li>
            <li><a href="#nfc">NFC</a></li>
            <li><a href="#fingerprint-sensor">Fingerprint Sensor</a></li>
            <li><a href="#ir">IR</a></li>
            <li><a href="#sd-card">SD card</a></li>
            <li><a href="#accelerometer">Accelerometer</a></li>
            <li><a href="#gyroscope">Gyroscope</a></li>
            <li><a href="#proximity">Proximity</a></li>
            <li><a href="#light">Light</a></li>
            <li><a href="#other-sensors">Other Sensors</a></li>
            <li><a href="#accessories">Accessories</a></li>
            <li><a href="#hardware-deviations">Hardware Deviations</a></li>
        </ul>
        </li>
        <li>
        <a href="#software-support">Software support</a>
        <ul>
            <li><a href="#device-tree-structure">Device tree structure</a></li>
            <li><a href="#build-type">Build type</a></li>
            <li><a href="#kernel">Kernel</a></li>
            <li><a href="#selinux-status">SELinux status</a></li>
            <li><a href="#verity">Verity</a></li>
            <li><a href="#updater">Updater</a></li>
            <li><a href="#frp">FRP</a></li>
            <li><a href="#safetynet">SafetyNet</a></li>
            <li><a href="#binder">Binder</a></li>
            <li><a href="#root-su">Root (su)</a></li>
            <li><a href="#non-pie-blobs">Non-PIE Blobs</a></li>
            <li><a href="#proprietary-files-extraction">Proprietary files extraction</a></li>
            <li><a href="#cve">CVE</a></li>
            <li><a href="#firmware">Firmware</a></li>
            <li><a href="#exfat-support">exFAT Support</a></li>
            <li><a href="#additional-features">Additional Features</a></li>
            <li><a href="#software-deviations">Software Deviations</a></li>
            <li><a href="#vendor-images">Vendor Images</a></li>
        </ul>
        </li>
        <li>
        <a href="#quality-of-life">Quality of life</a>
        <ul>
            <li><a href="#commit-authorship">Commit Authorship</a></li>
            <li><a href="#copyrights">Copyrights</a></li>
            <li><a href="#workflow">Workflow</a></li>
            <li><a href="#gitlab-issues">GitLab Issues</a></li>
            <li><a href="#licensing">Licensing</a></li>
            <li><a href="#wiki">Wiki</a></li>
            <li><a href="#stability">Stability</a></li>
            <li><a href="#leafos-recovery">LeafOS Recovery</a></li>
            <li><a href="#addon-packages">Addon packages</a></li>
        </ul>
        </li>
        <li><a href="#exceptions">Exceptions</a></li>
    </ul>
    <h1 id="device-ownership">Device ownership</h1>
    <ul>
        <li>Maintainers MUST own the device or at least a variant of it (devices with similar hardware but a different marketing name are allowed).</li>
    </ul>
    <h1 id="attaining-exceptions">Attaining exceptions</h1>
    <h2 id="process">Process</h2>
    <ul>
        <li>Device or software deviations from our core product (as described below) MUST be approved by no less than 2 Project Directors.</li>
        <li>Device or software exceptions SHOULD be made via change request to this repository.</li>
        <li>All device or software exceptions that are granted MUST be documented on the Wiki for all affected devices.</li>
    </ul>
    <h1 id="hardware-support">Hardware Support</h1>
    <h2 id="audio">Audio</h2>
    <ul>
        <li>All devices MUST support audio playback for media content.</li>
        <li>Phones MUST support in-call audio.</li>
        <li>Phones MUST support speaker audio.</li>
        <li>Tablet devices capable of in-call audio/speaker audio MUST support in-call/speaker audio.</li>
        <li>Devices SHOULD support any additional audio configuration inherent to their device (eg. echo cancellation, extra mics, etc).</li>
        <li>All devices MUST support any other audio output supported by their stock OS (eg. headphone jack, USB-C, BT).</li>
        <li>All devices with FM radio capabilities in their stock OS SHOULD support FM.</li>
    </ul>
    <h2 id="ril">RIL</h2>
    <ul>
        <li>All devices with RIL supported in their stock OS MUST support RIL for phone calls &amp; data.</li>
        <li>All devices with RIL supported in their stock OS MUST support emergency calling with a SIM inserted (112/911).</li>
        <li>All devices with RIL supported in their stock OS SHOULD support emergency calling without a SIM inserted (112/911).</li>
        <li>Data-only devices (defined as devices that have a RIL but do not support telephony stack due to hardware/firmware restrictions) are EXEMPTED from phone &amp; emergency dialing requirements.</li>
    </ul>
    <h2 id="encryption">Encryption</h2>
    <ul>
        <li>All devices that supported hardware-backed encryption on their stock OS MUST support hardware-backed encryption.</li>
        <li>All devices that shipped stock as forceencrypt SHOULD default to forceencrypt enabled.</li>
        <li>All devices MUST support software encryption.</li>
    </ul>
    <h2 id="wi-fi">Wi-Fi</h2>
    <ul>
        <li>All devices with Wi-Fi supported in their stock OS MUST support Wi-Fi.</li>
        <li>All devices with Wi-Fi MUST report same MAC address as on stock OS.</li>
        <li>All devices with Wi-Fi hotspot capabilities MUST support Wi-Fi tethering.</li>
    </ul>
    <h2 id="usb">USB</h2>
    <ul>
        <li>All devices with a USB port MUST support file access via MTP.</li>
        <li>All devices with USB tethering supported on their stock OS MUST support USB tethering.</li>
        <li>All devices with a USB port &amp; Data SHOULD support USB tethering.</li>
    </ul>
    <h2 id="gps">GPS</h2>
    <ul>
        <li>All devices with GPS supported in their stock OS MUST support GPS.</li>
    </ul>
    <h2 id="bluetooth">Bluetooth</h2>
    <ul>
        <li>All devices with Bluetooth supported in their stock OS MUST support Bluetooth.</li>
        <li>All devices with Bluetooth MUST report same MAC address as on stock OS.</li>
        <li>All devices with Bluetooth SHOULD support Bluetooth tethering.</li>
        <li>All devices with support for Qualcomm® aptX™, aptX™ HD, or any future variant of aptX™, in stock (non-beta releases) OS SHOULD support those variant of aptX™.</li>
        <li>All devices without support for Qualcomm® aptX™, aptX™ HD, or any future variant of aptX™ in stock (non-beta releases) OS MUST NOT support those variants of aptX™.</li>
    </ul>
    <h2 id="camera">Camera</h2>
    <ul>
        <li>All devices with Camera supported in their stock OS MUST support Camera, in both front facing and rear camera configurations.</li>
        <li>All devices with Dual (or more) Rear Cameras SHOULD support all rear cameras.</li>
        <li>All devices with Dual (or more) Front Facing Cameras SHOULD support all front cameras.</li>
        <li>All Camera HAL versions accessible with the device&#39;s Camera HAL MUST comply with the Camera and Video Recording requirements.</li>
    </ul>
    <h2 id="video-recording">Video Recording</h2>
    <ul>
        <li>All devices with Video Recording supported in their stock OS MUST support Video Recording, in both front facing and rear camera configurations.</li>
    </ul>
    <h2 id="codecs">Codecs</h2>
    <ul>
        <li>All devices with hardware encoding/decoding support in their stock OS MUST support hardware encoding/decoding for all non-proprietary codecs supported by their stock OS.</li>
    </ul>
    <h2 id="display">Display</h2>
    <ul>
        <li>All devices with a built-in Display MUST support the Display at the same resolution as the stock OS.</li>
        <li>All devices with a built-in Display SHOULD support the Display at the same density as the stock OS.</li>
        <li>All devices that do not include a built-in Display MUST support Display output via the hardware’s supported outputs (eg. Android TV - HDMI).</li>
        <li>All devices that support additional non-USB display interfaces SHOULD support those display output methods.</li>
        <li>All devices that support a USB-out display in their stock OS SHOULD support this display output (eg. MHL/Miracast/OTG).</li>
        <li>All devices that support HDR10 playback in their stock OS SHOULD support HDR10 playback.</li>
    </ul>
    <h2 id="nfc">NFC</h2>
    <ul>
        <li>All devices with NFC supported in their stock OS MUST support NFC.</li>
    </ul>
    <h2 id="fingerprint-sensor">Fingerprint Sensor</h2>
    <ul>
        <li>All devices with a Fingerprint Sensor MUST support the Fingerprint Sensor if the stock OS supports it with Marshmallow or higher Android versions.</li>
        <li>All devices with a Fingerprint Sensor SHOULD support the Fingerprint Sensor if the stock OS supports it for all other Android versions.</li>
    </ul>
    <h2 id="ir">IR</h2>
    <ul>
        <li>All devices with an IR blaster SHOULD support IR blaster.</li>
    </ul>
    <h2 id="sd-card">SD card</h2>
    <ul>
        <li>All devices with an SD card slot MUST support SD cards.</li>
        <li>All devices with an SD card slot SHOULD support adoptable storage.</li>
    </ul>
    <h2 id="accelerometer">Accelerometer</h2>
    <ul>
        <li>All devices with an accelerometer MUST support the accelerometer.</li>
    </ul>
    <h2 id="gyroscope">Gyroscope</h2>
    <ul>
        <li>All devices with a gyroscope MUST support the gyroscope.</li>
    </ul>
    <h2 id="proximity">Proximity</h2>
    <ul>
        <li>All devices with a proximity sensor MUST support the proximity sensor.</li>
    </ul>
    <h2 id="light">Light</h2>
    <ul>
        <li>All devices with a light sensor MUST support the light sensor.</li>
    </ul>
    <h2 id="other-sensors">Other Sensors</h2>
    <ul>
        <li>All other sensors supported by a device’s stock OS SHOULD be supported.</li>
    </ul>
    <h2 id="accessories">Accessories</h2>
    <ul>
        <li>All devices with proprietary accessories SHOULD support those accessories (eg. O-Click, Essential 360 Camera).</li>
    </ul>
    <h2 id="hardware-deviations">Hardware Deviations</h2>
    <p><strong>Hardware deviations are defined as exemptions granted for hardware requirements above that worked in stock, but do not work in LeafOS.</strong></p>
    <ul>
        <li>All hardware deviations from stock MUST be reported on the Wiki page for the device, with a user understandable justification.</li>
    </ul>
    <h1 id="software-support">Software support</h1>
    <h2 id="device-tree-structure">Device tree structure</h2>
    <ul>
        <li>Device trees MUST contain a leaf-compatible makefile with device declaration of [devicename].</li>
    </ul>
    <h2 id="build-type">Build type</h2>
    <ul>
        <li>All devices MUST be configured as user releases.</li>
    </ul>
    <h2 id="kernel">Kernel</h2>
    <ul>
        <li>All devices MUST NOT ship a prebuilt kernel.</li>
        <li>All devices MUST NOT implement software based touchscreen wake features such as double tap to wake, swipe to wake or gestures if there is no hardware-backed support for them in the touchscreen firmware.</li>
        <li>All devices MUST NOT implement forced fast charge over USB methods that violate the USB specifications.</li>
        <li>All devices MUST NOT implement any form of clock manipulation (underclocking, overclocking, etc.) for any processor (CPU, GPU).</li>
        <li>All devices MUST NOT implement any form of hardware voltage manipulation (undervolting, custom voltage tables, etc.).</li>
        <li>All devices MUST NOT implement any form of hardware register manipulation (sound control, etc.) that is not present on stock.</li>
        <li>All devices MUST NOT implement any form of custom KSM driver (UKSM, etc.).</li>
        <li>
        <p>All devices MUST NOT ship governors other than the ones specified in the following list:</p>
        <ul>
            <li>conservative</li>
            <li>interactive</li>
            <li>ondemand</li>
            <li>performance</li>
            <li>powersave</li>
            <li>sched</li>
            <li>sched_pixel</li>
            <li>schedutil</li>
            <li>userspace</li>
            <li>walt</li>
        </ul>
        </li>
        <li>
        <p>All devices MUST NOT ship I/O schedulers other than the ones specified in the following list:</p>
        <ul>
            <li>bfq</li>
            <li>cfq</li>
            <li>deadline</li>
            <li>kyber</li>
            <li>mq-deadline</li>
            <li>noop</li>
            <li>row</li>
        </ul>
        </li>
        <li>
        <p>All devices MUST only ship hotplugging drivers provided by the OEM or SoC vendor.</p>
        </li>
    </ul>
    <h2 id="selinux-status">SELinux status</h2>
    <ul>
        <li>All devices MUST be configured for SELinux Enforcing.</li>
    </ul>
    <h2 id="verity">Verity</h2>
    <ul>
        <li>All devices MUST disable verity on the system image for user builds.</li>
        <li>All devices SHOULD support verity on the vendor image.</li>
    </ul>
    <h2 id="updater">Updater</h2>
    <ul>
        <li>All devices with a shipping build of LeafOS MUST support upgrades via the native LeafOS Updater application &amp; the recovery documented on the Wiki for that device.</li>
    </ul>
    <h2 id="frp">FRP</h2>
    <ul>
        <li>All devices with stock support of Factory Reset Protection (FRP) SHOULD support FRP when Google Applications are installed by the user.</li>
    </ul>
    <h2 id="safetynet">SafetyNet</h2>
    <ul>
        <li>All devices MUST NOT alter SafetyNet validation responses.</li>
    </ul>
    <h2 id="binder">Binder</h2>
    <ul>
        <li>All devices MUST use the 64-bit Binder API.</li>
    </ul>
    <h2 id="root-su-">Root (su)</h2>
    <ul>
        <li>All devices MUST NOT ship with su included.</li>
    </ul>
    <h2 id="non-pie-blobs">Non-PIE Blobs</h2>
    <ul>
        <li>Devices MUST NOT use non-PIE (position-independent executable) binaries.</li>
    </ul>
    <h2 id="proprietary-files-extraction">Proprietary files extraction</h2>
    <ul>
        <li>Devices MUST have a working proprietary files extraction script in their device tree (or device tree dependencies) that reproduces an exact copy of the binaries required to build LeafOS from an existing LeafOS installation.</li>
        <li>Devices SHOULD use the global extraction script (located in tools/extract-utils).</li>
        <li>If a device maintainer elects to not use the common extraction script, the maintainer MUST ensure that the Wiki page for their device has valid instructions for operating the custom extraction script.</li>
        <li>Devices MUST use proprietary files extracted from, in order of preference, the same device&#39;s publicly-released image, another device&#39;s publicly-released image, or some other source with appropriately transferrable use/release/dissemination rights. In the event of the last option, artifacts documenting suitable transferability of rights MUST be provided to LeafOS project leadership.</li>
        <li>All proprietary files lists MUST contain a short comment noting the source of any un-pinned (default) proprietary files.</li>
        <li>Any proprietary files not sourced from the noted default MUST be pinned in the respective proprietary files list and have a short comment noting the source of those proprietary files.</li>
        <li>Devices MUST NOT include blobs belonging to Megvii Technology Ltd. or SenseTime Group Ltd.</li>
    </ul>
    <h2 id="cve">CVE</h2>
    <ul>
        <li>Devices MUST support CVE patches for “high profile” exploits and vulnerabilities (if the media is reporting on it, then we must have it patched).</li>
        <li>Devices SHOULD receive regular CVE patches to the device kernel and dependencies.</li>
    </ul>
    <h2 id="firmware">Firmware</h2>
    <ul>
        <li>All devices MUST assert on known to be working firmware versions if some firmware versions are known to be non-working.</li>
        <li>
        A/B devices are exempted from the above rule, and instead must do one of the following:
        <ul>
            <li>If the device is capable of shipping firmware it MUST do so.</li>
            <li>If the device is not capable of shipping firmware (eg. a device with multiple variants supported in one build) the device MUST ensure both slots are on a known good firmware (eg. using the copy-partitions before_leaf_install template on the Wiki).</li>
        </ul>
        </li>
    </ul>
    <h2 id="exfat-support">exFAT Support</h2>
    <p><strong>LeafOS operates under the assumption that OEM device licensing for exFAT is attached to the device, not software. LeafOS will comply with all requests for removal of exFAT support from OEMs, Microsoft or their representatives upon contact.</strong></p>
    <ul>
        <li>All devices shipping with a Linux kernel version of lower than 5.7 with exFAT support on stock MAY support exFAT with (and only with) a kernel based implementation of the maintainers choice.</li>
        <li>All devices shipping with a Linux kernel version of greater than or equal to 5.7 MAY support exFAT with the mainline Linux implementation, or the implementation provided by their device&#39;s vendor.</li>
        <li>All devices not meeting one of the above requirements MUST NOT support exFAT.</li>
    </ul>
    <h2 id="additional-features">Additional Features</h2>
    <ul>
        <li>All devices SHOULD support in-kernel (MDSS, MDNIE or similar) LiveDisplay colour adjustment.</li>
    </ul>
    <h2 id="software-deviations">Software Deviations</h2>
    <p><strong>Software deviations are defined as exemptions granted for software requirements above that worked in stock, but do not work in LeafOS.</strong></p>
    <ul>
        <li>All software deviations from other LeafOS devices of the same type MUST be approved by Directors (eg. if one wants to remove Music app, get approval).</li>
        <li>All software deviations from other LeafOS devices of the same type MUST be reported on the Wiki page for the device, with a user understandable justification.</li>
        <li>Device maintainers MUST ship a LeafOS sourced web browser.</li>
    </ul>
    <h2 id="vendor-images">Vendor Images</h2>
    <ul>
        <li>All non-A/B devices relying on an OEM provided vendor partition must assert vendor image versions at flash-time.</li>
        <li>
        All A/B devices with a vendor partition MUST either:
        <ul>
            <li>Build a vendor image.</li>
            <li>Detail on the Wiki: The required firmware version, the process of installing it, and a process that ensures all slots are on the same firmware (eg. the Wiki&#39;s copy-partitions template).</li>
        </ul>
        </li>
        <li>All maintainers MUST NOT require a modified prebuilt vendor image either in their build tree, or on the Wiki.</li>
        <li>All Treble enabled devices SHOULD verify basic hardware functionality with an AOSP GSI.</li>
    </ul>
    <h1 id="quality-of-life">Quality of life</h1>
    <h2 id="commit-authorship">Commit Authorship</h2>
    <ul>
        <li>All non-original commits MUST have proper authorship attribution from the source it was taken from or adapted from.</li>
    </ul>
    <h2 id="copyrights">Copyrights</h2>
    <ul>
        <li>All original contributions MUST be copyrighted as “(C) [YEAR] The LeafOS Project”.</li>
        <li>All LeafOS copyrights MUST only be additive to the copyright header.</li>
        <li>Do not remove copyrights from CyanogenMod, Cyanogen Inc, LineageOS or any other upstream.</li>
    </ul>
    <h2 id="workflow">Workflow</h2>
    <ul>
        <li>Force pushing branches SHOULD be avoided.</li>
        <li>In the event of a force pushed branch, backup branches of the pre-forced HEAD MUST be made.</li>
    </ul>
    <h2 id="gitlab-issues">GitLab Issues</h2>
    <ul>
        <li>Device maintainer(s) MUST have a GitLab account for bug tracking and cross-team collaboration.</li>
        <li>Device maintainer(s) MUST routinely triage, answer and close bug reports.</li>
        <li>Device maintainer(s) SHOULD make their GitLab name match their maintainer name as displayed on the Wiki.</li>
    </ul>
    <h2 id="licensing">Licensing</h2>
    <ul>
        <li>All Kernel contributions MUST be GPLv2.</li>
        <li>All Android contributions SHOULD be Apache 2.0 licensed.</li>
        <li>Any contribution to an existing Apache 2.0 project MUST fall under Apache Compliance Category A.</li>
        <li>Any contribution to an existing Apache 2.0 project MUST NOT be in Apache Compliance Category X.</li>
    </ul>
    <h2 id="wiki">Wiki</h2>
    <ul>
        <li>All devices with a shipping build of LeafOS MUST have a Wiki page with valid installation instructions.</li>
        <li>All devices with a shipping build of LeafOS MUST document Hardware Deviations from stock capabilities.</li>
        <li>All devices with a shipping build of LeafOS MUST document Software Deviations from other LeafOS releases of the same device type.</li>
    </ul>
    <h2 id="stability">Stability</h2>
    <ul>
        <li>Issues like the &quot;screen of death&quot; MUST NOT affect the device.</li>
        <li>The device MUST NOT have abnormal battery drain.</li>
    </ul>
    <h2 id="leafos-recovery">LeafOS Recovery</h2>
    <ul>
        <li>Maintainers wishing to ship LeafOS 1.1+ MUST ship LeafOS Recovery as the default solution for their device on the Wiki.</li>
        <li>Devices that do not have traditional recovery images MUST support &amp; document another means of installation for LeafOS zip files.</li>
    </ul>
    <h2 id="addon-packages">Addon packages</h2>
    <ul>
        <li>Maintainers wishing to ship LeafOS 1.1+ for their device MUST verify addon packages listed on the wiki can be installed through Leaf Recovery.</li>
    </ul>
    <h1 id="exceptions">Exceptions</h1>
    <p>All currently granted exceptions should be listed in the following table. To request an exception, please submit a change to this repository.</p>

    <body class="page-body">

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr class="table-header-row">
                    <th class="table-header">Date</th>
                    <th class="table-header">Device/OEM</th>
                    <th class="table-header">Section Exempted</th>
                    <th class="table-header">Reason</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-row">
                    <td class="table-data">2018/02/08</td>
                    <td class="table-data">Samsung</td>
                    <td class="table-data">Hardware Encryption</td>
                    <td class="table-data">Samsung devices that cannot support hardware encryption due to Knox/Tee are exempted from the hardware crypto requirements. MUST still support software crypto.</td>
                </tr>
                <tr class="table-row">
                    <td class="table-data">2018/02/11</td>
                    <td class="table-data">Android TV devices</td>
                    <td class="table-data">In-Remote Microphones</td>
                    <td class="table-data">Requires proprietary audio routing/methods that have no OSS counterpart, and rely on proprietary functions. MUST support Microphone input through the Android TV Remote app.</td>
                </tr>
                <tr class="table-row">
                    <td class="table-data">2018/02/12</td>
                    <td class="table-data">hlte[can/tmo/usc/vzw]</td>
                    <td class="table-data">NFC</td>
                    <td class="table-data">Stock NFC HAL is undocumented and doesn't match any known interfaces. Stealing configs and firmware from devices with a proper setup fails due to a signature mismatch when the (required) firmware download is attempted.</td>
                </tr>
                <tr class="table-row">
                    <td class="table-data">2019/10/21</td>
                    <td class="table-data">s3ve3g*</td>
                    <td class="table-data">NFC</td>
                    <td class="table-data">Stock NFC HAL is undocumented and doesn't match any known interfaces. Stealing configs and firmware from devices with a proper setup fails due to a signature mismatch when the (required) firmware download is attempted.</td>
                </tr>
                <tr class="table-row">
                    <td class="table-data">2023/04/11</td>
                    <td class="table-data">FDE only devices</td>
                    <td class="table-data">Encryption</td>
                    <td class="table-data">As of Android 13, FDE is no longer supported. All devices that can MUST migrate to FBE, but Some devices have custom keymaster HAL implementations that only allow FDE to function. Devices only capable of using FDE that are promoted to LeafOS 20 or above are exempted from encryption requirements. These devices MUST display a notice on the LeafOS Wiki that details this exemption.</td>
                </tr>
                <tr class="table-row">
                    <td class="table-data">2024/02/07</td>
                    <td class="table-data">Google Pixel</td>
                    <td class="table-data">Prebuilt Kernel</td>
                    <td class="table-data">As of Pixel 6, Google is building the kernel with bazel, which is very time consuming to integrate in our inline builds and keep it working. Given that these new devices have 5 or 7 years of support, we do not have to compile the kernel from source, since they receive monthly security patches directly from Google. These devices MUST use source built kernel or our own LeafOS compiled prebuilt kernel once they have reached their EOL.</td>
                </tr>
                <tr class="table-row">
                    <td class="table-data">2024/02/16</td>
                    <td class="table-data">coral/flame</td>
                    <td class="table-data">Face Unlock</td>
                    <td class="table-data">On stock, Face Unlock and Soli features were largely tied to SystemUIGoogle, with a functional Face Unlock hook pushed to AOSP. Unfortunately, Google stopped caring about Face Unlock and let it break on the Pixel 4 series, with no way to fix it without source we don't have.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1 id="submitting-a-port">Submitting a port</h1>
    <p>Congratulations! After weeks (months?) of hard work, LeafOS is running well on your device! If you’re interested in adding your device to LeafOS’ roster of officially supported devices, we ask that you meet all of the prerequisites above and then get in touch with our developer relations team.</p>
    <h1 id="submitting-your-device">Submitting your device</h1>
    <p>Send an email to thomas_turner@talktalk.net. The email should contain:</p>
    <p>- Links to your device, vendor, and kernel trees on GitHub.</p>
    <p>- Email addresses of all maintainers. If a team worked on your device, all team members must be listed in the email.</p>
    <p>Please be patient once you’ve sent your email. It takes time to review your source code and vendor blobs. If changes are deemed necessary, you’ll receive notice and suggestions for improvement. It will be up to you to implement the changes before resubmitting your work for approval. Keep in mind that not all device port requests are accepted. Developer relations will do their best to inform you of the rationale for their decision, though.</p>

    <div class="page-divider"></div>

    </body>


    <hr>
    <p><strong>This document is licensed CC-BY-3.0, with portions adapted from Google’s CDD requirements.</strong></p>
    </article>

</body>
<?php 
include 'includes/footer.php';
?>
</html>
