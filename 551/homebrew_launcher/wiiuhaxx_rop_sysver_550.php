﻿<?php
$ROP_POPJUMPLR_STACK12 = 0x0101cd24;
$ROP_POPJUMPLR_STACK20 = 0x01024d88;
$ROP_CALLFUNC = 0x01080274;
$ROP_CALLR28_POP_R28_TO_R31 = 0x0107dd70;
$ROP_POP_R28R29R30R31 = 0x0101d8d4;
$ROP_POP_R27 = 0x0101cb00;
$ROP_POP_R24_TO_R31 = 0x010204c8;
$ROP_CALLFUNCPTR_WITHARGS_FROM_R3MEM = 0x010253c0;
$ROP_SETR3TOR31_POP_R31 = 0x0101cc10;

$ROP_memcpy = 0x01035fc8;
$ROP_DCFlushRange = 0x01023f88;
$ROP_ICInvalidateRange = 0x010240b0;
$ROP_OSSwitchSecCodeGenMode = 0x010376c0;
$ROP_OSCodegenCopy = 0x010376d8;
$ROP_OSGetCodegenVirtAddrRange = 0x010375c0;
$ROP_OSGetCoreId = 0x01024e8c;
$ROP_OSGetCurrentThread = 0x01043150;
$ROP_OSSetThreadAffinity = 0x010429dc;
$ROP_OSYieldThread = 0x010418e4;
$ROP_OSFatal = 0x01031618;
$ROP_Exit = 0x0101cd80;
$ROP_OSScreenFlipBuffersEx = 0x0103afd0;
$ROP_OSScreenClearBufferEx = 0x0103b090;
$ROP_OSDynLoad_Acquire = 0x0102a3b4;
$ROP_OSDynLoad_FindExport = 0x0102b828;
$ROP_os_snprintf = 0x0102f160;
?>